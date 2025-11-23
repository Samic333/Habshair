@props(['buttonLabel' => 'Submit request'])

<div style="background:#ffffff; border-radius:1.2rem; padding:1.2rem 1.3rem; box-shadow:0 12px 28px rgba(15,23,42,0.08); border:1px solid #e5e7eb;">
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

    <form method="POST" action="{{ route('quotes.store') }}" style="display:grid; gap:0.8rem;">
        @csrf

        <div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(220px,1fr)); gap:0.75rem;">
            <label style="display:grid; gap:0.35rem; font-size:0.9rem; color:#071937;">
                <span>Service type</span>
                <select name="service_type" required style="padding:0.55rem 0.65rem; border:1px solid #d1d5db; border-radius:0.75rem; font-size:0.95rem;">
                    <option value="">Select a service</option>
                    @foreach (['charter' => 'Charter', 'cargo' => 'Cargo', 'drone' => 'Drone', 'medevac' => 'MedEvac', 'vip' => 'VIP'] as $value => $label)
                        <option value="{{ $value }}" @selected(old('service_type') === $value)>{{ $label }}</option>
                    @endforeach
                </select>
                @error('service_type')
                    <span style="color:#b91c1c; font-size:0.82rem;">{{ $message }}</span>
                @enderror
            </label>

            <label style="display:grid; gap:0.35rem; font-size:0.9rem; color:#071937;">
                <span>Country</span>
                <input name="country" type="text" value="{{ old('country') }}" placeholder="e.g. South Sudan" style="padding:0.55rem 0.65rem; border:1px solid #d1d5db; border-radius:0.75rem; font-size:0.95rem;">
            </label>

            <label style="display:grid; gap:0.35rem; font-size:0.9rem; color:#071937;">
                <span>Departure location</span>
                <input name="departure_location" type="text" value="{{ old('departure_location') }}" placeholder="Airport or strip" style="padding:0.55rem 0.65rem; border:1px solid #d1d5db; border-radius:0.75rem; font-size:0.95rem;">
            </label>

            <label style="display:grid; gap:0.35rem; font-size:0.9rem; color:#071937;">
                <span>Destination location</span>
                <input name="destination_location" type="text" value="{{ old('destination_location') }}" placeholder="Airport or strip" style="padding:0.55rem 0.65rem; border:1px solid #d1d5db; border-radius:0.75rem; font-size:0.95rem;">
            </label>
        </div>

        <div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(220px,1fr)); gap:0.75rem;">
            <label style="display:grid; gap:0.35rem; font-size:0.9rem; color:#071937;">
                <span>Aircraft type</span>
                <input name="aircraft_type" type="text" value="{{ old('aircraft_type') }}" placeholder="Preferred aircraft" style="padding:0.55rem 0.65rem; border:1px solid #d1d5db; border-radius:0.75rem; font-size:0.95rem;">
            </label>

            <label style="display:grid; gap:0.35rem; font-size:0.9rem; color:#071937;">
                <span>Cargo type</span>
                <input name="cargo_type" type="text" value="{{ old('cargo_type') }}" placeholder="If applicable" style="padding:0.55rem 0.65rem; border:1px solid #d1d5db; border-radius:0.75rem; font-size:0.95rem;">
            </label>

            <label style="display:grid; gap:0.35rem; font-size:0.9rem; color:#071937;">
                <span>Number of rotations</span>
                <input name="rotations" type="number" min="1" value="{{ old('rotations', 1) }}" style="padding:0.55rem 0.65rem; border:1px solid #d1d5db; border-radius:0.75rem; font-size:0.95rem;">
            </label>

            <label style="display:grid; gap:0.35rem; font-size:0.9rem; color:#071937;">
                <span>Drone mission area (if drone)</span>
                <input name="drone_mission_area" type="text" value="{{ old('drone_mission_area') }}" placeholder="Area/coordinates" style="padding:0.55rem 0.65rem; border:1px solid #d1d5db; border-radius:0.75rem; font-size:0.95rem;">
            </label>
        </div>

        <div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(220px,1fr)); gap:0.75rem;">
            <label style="display:grid; gap:0.35rem; font-size:0.9rem; color:#071937;">
                <span>Name</span>
                <input name="customer_name" type="text" value="{{ old('customer_name') }}" required placeholder="Your name" style="padding:0.55rem 0.65rem; border:1px solid #d1d5db; border-radius:0.75rem; font-size:0.95rem;">
                @error('customer_name')
                    <span style="color:#b91c1c; font-size:0.82rem;">{{ $message }}</span>
                @enderror
            </label>

            <label style="display:grid; gap:0.35rem; font-size:0.9rem; color:#071937;">
                <span>Email</span>
                <input name="customer_email" type="email" value="{{ old('customer_email') }}" placeholder="you@email.com" style="padding:0.55rem 0.65rem; border:1px solid #d1d5db; border-radius:0.75rem; font-size:0.95rem;">
                @error('customer_email')
                    <span style="color:#b91c1c; font-size:0.82rem;">{{ $message }}</span>
                @enderror
            </label>

            <label style="display:grid; gap:0.35rem; font-size:0.9rem; color:#071937;">
                <span>Phone</span>
                <input name="phone" type="text" value="{{ old('phone') }}" placeholder="+211..." style="padding:0.55rem 0.65rem; border:1px solid #d1d5db; border-radius:0.75rem; font-size:0.95rem;">
            </label>

            <label style="display:grid; gap:0.35rem; font-size:0.9rem; color:#071937;">
                <span>Company</span>
                <input name="company" type="text" value="{{ old('company') }}" placeholder="Org / NGO" style="padding:0.55rem 0.65rem; border:1px solid #d1d5db; border-radius:0.75rem; font-size:0.95rem;">
            </label>
        </div>

        <label style="display:grid; gap:0.35rem; font-size:0.9rem; color:#071937;">
            <span>Notes</span>
            <textarea name="notes" rows="4" placeholder="Mission details, timing, payload, passengers..." style="padding:0.65rem 0.7rem; border:1px solid #d1d5db; border-radius:0.9rem; font-size:0.95rem;">{{ old('notes') }}</textarea>
        </label>

        <button type="submit" class="hb-btn hb-btn-primary" style="justify-self:start;">
            {{ $buttonLabel }}
        </button>
    </form>
</div>
