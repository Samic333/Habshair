set -e

echo "==> Generating model/controller/migration/mail..."
php artisan make:model BookingRequest -mcr >/dev/null
php artisan make:mail BookingRequestSubmitted --markdown=emails.booking-request >/dev/null

echo "==> Writing migration..."
mf=$(ls database/migrations/*_create_booking_requests_table.php)
cat > "$mf" <<'PHP'
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('booking_requests', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('type')->default('pax'); // pax | vip | cargo
            $table->string('origin', 3);
            $table->string('destination', 3);
            $table->date('date');
            $table->unsignedInteger('pax')->default(1);
            $table->text('notes')->nullable();
            $table->string('status')->default('new'); // new|contacted|confirmed|cancelled
            $table->timestamps();
        });
    }
    public function down(): void {
        Schema::dropIfExists('booking_requests');
    }
};
PHP

echo "==> Add fillable to model..."
php -r '
$path = "app/Models/BookingRequest.php";
$c = file_get_contents($path);
$c = preg_replace("#class BookingRequest extends Model\\s*{#","class BookingRequest extends Model{\n    protected \\$fillable=[\"name\",\"email\",\"phone\",\"type\",\"origin\",\"destination\",\"date\",\"pax\",\"notes\",\"status\"];",$c);
file_put_contents($path,$c);
'

echo "==> Controller create/store actions..."
cat > app/Http/Controllers/BookingRequestController.php <<'PHP'
<?php
namespace App\Http\Controllers;

use App\Mail\BookingRequestSubmitted;
use App\Models\BookingRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class BookingRequestController extends Controller
{
    public function create(){ return view('book'); }

    public function store(Request $request){
        $data = $request->validate([
            'name'=>'required|string|max:255',
            'email'=>'nullable|email',
            'phone'=>'nullable|string|max:50',
            'type'=>'required|in:pax,vip,cargo',
            'origin'=>'required|string|max:3',
            'destination'=>'required|string|max:3|different:origin',
            'date'=>'required|date|after_or_equal:today',
            'pax'=>'required|integer|min:1|max:19',
            'notes'=>'nullable|string|max:2000',
        ]);
        $rec = BookingRequest::create($data);
        $to = env('BOOKINGS_EMAIL','noreply@habeshair.com');
        if($to){ Mail::to($to)->send(new BookingRequestSubmitted($rec)); }
        return redirect()->route('book.create')->with('ok','Thanks! Your request was received. Our team will contact you shortly.');
    }
}
PHP

echo "==> Mailable..."
cat > app/Mail/BookingRequestSubmitted.php <<'PHP'
<?php
namespace App\Mail;

use App\Models\BookingRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BookingRequestSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public BookingRequest $bookingRequest) {}

    public function build(){
        return $this->subject('New Booking Request - HabeshAir')
            ->markdown('emails.booking-request', ['bookingRequest'=>$this->bookingRequest]);
    }
}
PHP

echo "==> Email view..."
mkdir -p resources/views/emails
cat > resources/views/emails/booking-request.blade.php <<'BLADE'
@component('mail::message')
# New Booking Request

**Type:** {{ strtoupper($bookingRequest->type) }}  
**Name:** {{ $bookingRequest->name }}  
**Email:** {{ $bookingRequest->email ?? '—' }}  
**Phone:** {{ $bookingRequest->phone ?? '—' }}  
**From → To:** {{ $bookingRequest->origin }} → {{ $bookingRequest->destination }}  
**Date:** {{ \Illuminate\Support\Carbon::parse($bookingRequest->date)->toFormattedDateString() }}  
**PAX:** {{ $bookingRequest->pax }}

**Notes:**  
{{ $bookingRequest->notes ?? '—' }}

@component('mail::button', ['url' => url('/admin')])
Open Admin
@endcomponent

Thanks,  
HabeshAir
@endcomponent
BLADE

echo "==> Public booking page..."
cat > resources/views/book.blade.php <<'BLADE'
<!doctype html><html lang="en"><head>
<meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<title>Book – HabeshAir</title>
<style>
:root{--primary:#006994;--border:#e5e7eb}
body{font:16px/1.5 system-ui,-apple-system,Segoe UI,Inter,Roboto,Arial;margin:0;background:#f7f7f8;color:#111}
.container{max-width:760px;margin:32px auto;padding:16px}
.card{background:#fff;border:1px solid var(--border);border-radius:16px;padding:20px}
label{display:grid;gap:6px;margin:8px 0;font-size:13px;color:#334155;font-weight:600}
input,select,textarea{padding:10px 12px;border:1px solid var(--border);border-radius:10px;outline-color:var(--primary)}
button{background:var(--primary);color:#fff;border:none;padding:12px 14px;border-radius:12px;font-weight:700;cursor:pointer}
.alert{padding:12px 14px;border-radius:10px;margin-bottom:12px;background:#e6ffed;border:1px solid #22c55e;color:#065f46}
</style>
</head><body>
<div class="container">
  <h1 style="margin:0 0 8px">Request a Booking</h1>
  <p style="margin:0 0 16px;color:#475569">Passenger, VIP charter, or cargo – we’ll confirm availability and pricing.</p>

  @if(session('ok')) <div class="alert">{{ session('ok') }}</div> @endif
  @if($errors->any())
    <div class="alert" style="background:#fff7ed;border-color:#f59e0b;color:#9a3412">
      <b>Fix the following:</b>
      <ul>@foreach($errors->all() as $e)<li>{{ $e }}</li>@endforeach</ul>
    </div>
  @endif

  <form class="card" method="post" action="{{ route('book.store') }}">
    @csrf
    <label> Full name <input name="name" value="{{ old('name') }}" required></label>
    <label> Email <input type="email" name="email" value="{{ old('email') }}"></label>
    <label> Phone <input name="phone" value="{{ old('phone') }}"></label>
    <label> Request type
      <select name="type" required>
        <option value="pax" @selected(old('type')==='pax')>Passenger</option>
        <option value="vip" @selected(old('type')==='vip')>VIP Charter</option>
        <option value="cargo" @selected(old('type')==='cargo')>Cargo</option>
      </select>
    </label>
    <div style="display:grid;gap:12px;grid-template-columns:1fr 1fr">
      <label> From (IATA) <input name="origin" maxlength="3" placeholder="JUB" value="{{ old('origin') }}" required></label>
      <label> To (IATA) <input name="destination" maxlength="3" placeholder="WUU" value="{{ old('destination') }}" required></label>
    </div>
    <div style="display:grid;gap:12px;grid-template-columns:1fr 1fr">
      <label> Date <input type="date" name="date" value="{{ old('date') }}" required></label>
      <label> Passengers <input type="number" name="pax" min="1" max="19" value="{{ old('pax',1) }}" required></label>
    </div>
    <label> Notes (optional) <textarea name="notes" rows="4">{{ old('notes') }}</textarea></label>
    <button type="submit">Submit Request</button>
  </form>
</div>
</body></html>
BLADE

echo "==> Add routes..."
php -r '
$f="routes/web.php";
$c=file_get_contents($f);
if(!str_contains($c,"BookingRequestController")){
  $c="<?php\nuse Illuminate\\Support\\Facades\\Route;\nuse App\\Http\\Controllers\\BookingRequestController;\n\nRoute::view(\"/\",\"home\");\nRoute::get(\"/book\",[BookingRequestController::class,\"create\"])->name(\"book.create\");\nRoute::post(\"/book\",[BookingRequestController::class,\"store\"])->name(\"book.store\");\n\n".preg_replace("#^<\\?php#","",$c);
  file_put_contents($f,$c);
}
'

echo "==> Ensure email recipient..."
grep -q '^BOOKINGS_EMAIL=' .env || echo 'BOOKINGS_EMAIL=ops@habeshair.com' >> .env

echo "==> Migrate & clear caches..."
php artisan migrate --force
php artisan config:clear
php artisan cache:clear
php artisan view:clear

echo "==> Done. Visit /book"
