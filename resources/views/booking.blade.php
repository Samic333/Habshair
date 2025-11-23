@extends('layouts.app')

@section('title', 'Book a commuter flight')

@section('content')
<div class="hb-container">
    <section style="display:flex; flex-wrap:wrap; gap:1.5rem; align-items:flex-start;">
        <div style="flex:1 1 320px; min-width:260px;">
            <div style="display:inline-flex; align-items:center; padding:0.3rem 0.8rem; border-radius:999px; background:rgba(14,116,144,0.08); color:#0b3d91; font-size:0.82rem; font-weight:700; margin-bottom:0.75rem;">
                <span style="font-size:0.95rem; margin-right:0.35rem;">✈︎</span>
                Book a commuter flight
            </div>
            <h1 style="font-size:2rem; line-height:1.12; margin:0 0 0.65rem; color:#071937;">Tell us your route—we’ll confirm availability fast.</h1>
            <p style="font-size:0.95rem; color:#4b5563; margin:0 0 1rem; max-width:32rem;">No payment needed now. We will confirm your flight and send payment instructions.</p>
            <ul style="margin:0 0 1rem; padding-left:1.1rem; color:#4b5563; font-size:0.9rem; line-height:1.6;">
                <li>Regional routes across South Sudan and neighboring hubs</li>
                <li>Flexible for passengers or light cargo</li>
                <li>WhatsApp/phone follow-up by our ops desk</li>
            </ul>
        </div>

        <div style="flex:1 1 320px; min-width:280px; background:#ffffff; border-radius:1.2rem; padding:1.1rem 1.2rem; box-shadow:0 12px 25px rgba(15,23,42,0.08); border:1px solid #e5e7eb;">
            @if (session('status'))
                <div style="margin-bottom:0.9rem; padding:0.65rem 0.75rem; border-radius:0.75rem; background:#ecfdf3; color:#166534; border:1px solid #bbf7d0; font-size:0.9rem;">
                    {{ session('status') }}
                </div>
            @endif

            @if ($errors->any())
                <div style="margin-bottom:0.9rem; padding:0.65rem 0.75rem; border-radius:0.75rem; background:#fef2f2; color:#991b1b; border:1px solid #fecdd3; font-size:0.9rem;">
                    Please fix the highlighted fields and try again.
                </div>
            @endif

            @php
                $cities = ['Juba', 'Wau', 'Malakal', 'Rumbek', 'Bor', 'Yambio', 'Aweil', 'Bentiu', 'Torit'];
            @endphp

            <form method="POST" action="{{ route('booking.submit') }}" style="display:grid; gap:0.8rem;">
                @csrf
                <input type="text" name="website" value="" aria-hidden="true" tabindex="-1" style="position:absolute; left:-9999px; top:-9999px;" autocomplete="off">

                <div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(200px,1fr)); gap:0.75rem;">
                    <label style="display:grid; gap:0.3rem; font-size:0.9rem; color:#071937;">
                        <span>From</span>
                        <select name="from_city" required style="padding:0.55rem 0.65rem; border:1px solid #d1d5db; border-radius:0.75rem; font-size:0.95rem;">
                            <option value="">Select origin</option>
                            @foreach($cities as $city)
                                <option value="{{ $city }}" @selected(old('from_city') === $city)>{{ $city }}</option>
                            @endforeach
                        </select>
                        @error('from_city')
                            <span style="color:#b91c1c; font-size:0.82rem;">{{ $message }}</span>
                        @enderror
                    </label>

                    <label style="display:grid; gap:0.3rem; font-size:0.9rem; color:#071937;">
                        <span>To</span>
                        <select name="to_city" required style="padding:0.55rem 0.65rem; border:1px solid #d1d5db; border-radius:0.75rem; font-size:0.95rem;">
                            <option value="">Select destination</option>
                            @foreach($cities as $city)
                                <option value="{{ $city }}" @selected(old('to_city') === $city)>{{ $city }}</option>
                            @endforeach
                        </select>
                        @error('to_city')
                            <span style="color:#b91c1c; font-size:0.82rem;">{{ $message }}</span>
                        @enderror
                    </label>
                </div>

                <div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(160px,1fr)); gap:0.75rem;">
                    <label style="display:grid; gap:0.3rem; font-size:0.9rem; color:#071937;">
                        <span>Preferred date</span>
                        <input type="date" name="preferred_date" value="{{ old('preferred_date') }}" required style="padding:0.55rem 0.65rem; border:1px solid #d1d5db; border-radius:0.75rem; font-size:0.95rem;">
                        @error('preferred_date')
                            <span style="color:#b91c1c; font-size:0.82rem;">{{ $message }}</span>
                        @enderror
                    </label>

                    <label style="display:grid; gap:0.3rem; font-size:0.9rem; color:#071937;">
                        <span>Passengers</span>
                        <input type="number" name="passengers" min="1" max="50" value="{{ old('passengers', 1) }}" required style="padding:0.55rem 0.65rem; border:1px solid #d1d5db; border-radius:0.75rem; font-size:0.95rem;">
                        @error('passengers')
                            <span style="color:#b91c1c; font-size:0.82rem;">{{ $message }}</span>
                        @enderror
                    </label>
                </div>

                <div style="display:grid; gap:0.4rem; font-size:0.9rem; color:#071937;">
                    <span>Trip type</span>
                    <div style="display:flex; flex-wrap:wrap; gap:0.6rem;">
                        @php
                            $tripTypes = ['one_way' => 'One-way', 'return' => 'Return', 'charter' => 'Private charter'];
                        @endphp
                        @foreach($tripTypes as $value => $label)
                            <label style="display:inline-flex; align-items:center; gap:0.35rem; padding:0.35rem 0.6rem; border:1px solid #d1d5db; border-radius:999px; font-size:0.9rem; background:#f8fafc;">
                                <input type="radio" name="trip_type" value="{{ $value }}" @checked(old('trip_type', 'one_way') === $value)>
                                <span>{{ $label }}</span>
                            </label>
                        @endforeach
                    </div>
                    @error('trip_type')
                        <span style="color:#b91c1c; font-size:0.82rem;">{{ $message }}</span>
                    @enderror
                </div>

                <div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(200px,1fr)); gap:0.75rem;">
                    <label style="display:grid; gap:0.3rem; font-size:0.9rem; color:#071937;">
                        <span>Contact name</span>
                        <input type="text" name="contact_name" value="{{ old('contact_name') }}" required placeholder="Your name" style="padding:0.55rem 0.65rem; border:1px solid #d1d5db; border-radius:0.75rem; font-size:0.95rem;">
                        @error('contact_name')
                            <span style="color:#b91c1c; font-size:0.82rem;">{{ $message }}</span>
                        @enderror
                    </label>

                    <label style="display:grid; gap:0.3rem; font-size:0.9rem; color:#071937;">
                        <span>Contact email</span>
                        <input type="email" name="contact_email" value="{{ old('contact_email') }}" placeholder="you@email.com" style="padding:0.55rem 0.65rem; border:1px solid #d1d5db; border-radius:0.75rem; font-size:0.95rem;">
                        @error('contact_email')
                            <span style="color:#b91c1c; font-size:0.82rem;">{{ $message }}</span>
                        @enderror
                    </label>

                    <label style="display:grid; gap:0.3rem; font-size:0.9rem; color:#071937;">
                        <span>Contact phone (WhatsApp preferred)</span>
                        <input type="text" name="contact_phone" value="{{ old('contact_phone') }}" required placeholder="+211..." style="padding:0.55rem 0.65rem; border:1px solid #d1d5db; border-radius:0.75rem; font-size:0.95rem;">
                        @error('contact_phone')
                            <span style="color:#b91c1c; font-size:0.82rem;">{{ $message }}</span>
                        @enderror
                    </label>
                </div>

                <label style="display:grid; gap:0.3rem; font-size:0.9rem; color:#071937;">
                    <span>Notes</span>
                    <textarea name="notes" rows="4" placeholder="Cargo, special requests, timing preferences..." style="padding:0.65rem 0.7rem; border:1px solid #d1d5db; border-radius:0.9rem; font-size:0.95rem;">{{ old('notes') }}</textarea>
                    @error('notes')
                        <span style="color:#b91c1c; font-size:0.82rem;">{{ $message }}</span>
                    @enderror
                </label>

                <button type="submit" class="hb-btn hb-btn-primary" style="justify-self:start;">Submit booking request</button>
            </form>
        </div>
    </section>
</div>
@endsection
