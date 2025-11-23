{{-- resources/views/services/vip.blade.php --}}
@extends('layouts.app')

@section('title', 'Habeshair – VIP & Executive')

@section('content')
<div class="hb-container">
    <section style="display:flex; flex-wrap:wrap; gap:2rem; align-items:flex-start;">
        <div style="flex:1 1 320px; min-width:260px;">
            <div style="display:inline-flex; align-items:center; padding:0.3rem 0.8rem; border-radius:999px; background:rgba(14,116,144,0.08); color:#0b3d91; font-size:0.82rem; font-weight:700; margin-bottom:0.75rem;">
                <span style="font-size:0.95rem; margin-right:0.35rem;">★</span>
                VIP & executive travel
            </div>

            <h1 style="font-size:2.05rem; line-height:1.12; margin:0 0 0.7rem; color:#071937;">
                Quiet cabins, discreet handling, and fast routings.
            </h1>

            <p style="font-size:0.98rem; color:#4b5563; margin:0 0 1.1rem; max-width:30rem;">
                Point-to-point private charters across East Africa with flexible departure times, concierge coordination, and on-ground escorts.
            </p>

            <div style="display:flex; flex-wrap:wrap; gap:0.7rem;">
                <a href="{{ route('book') }}" class="hb-btn hb-btn-primary">Plan a VIP charter</a>
                <a href="{{ route('contact') }}" class="hb-btn hb-btn-outline" style="color:#0b3d91; border-color:#c7d7ff;">Concierge contact</a>
            </div>
        </div>

        <div style="flex:1 1 260px; min-width:240px;">
            <div style="background:#ffffff; border-radius:1.25rem; padding:1.05rem 1.15rem; box-shadow:0 18px 35px rgba(15,23,42,0.12); border:1px solid #e5e7eb;">
                <div style="font-size:0.85rem; color:#6b7280; margin-bottom:0.5rem;">Service notes</div>
                <ul style="margin:0; padding-left:1.05rem; color:#071937; font-size:0.92rem; line-height:1.55;">
                    <li>Private terminals or discreet handling where available</li>
                    <li>Flexible departure windows and quick turns</li>
                    <li>Light catering and ground transfers on request</li>
                    <li>Dedicated ops liaison for trip updates</li>
                </ul>
            </div>
        </div>
    </section>

    <section style="margin-top:2.6rem;">
        <h2 style="font-size:1.3rem; color:#071937; margin:0 0 0.5rem;">Popular VIP sectors</h2>
        <p style="font-size:0.9rem; color:#4b5563; margin:0 0 1rem;">Swap routes for your own sectors later—these are placeholders to demonstrate options.</p>

        <div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(230px,1fr)); gap:1rem;">
            @php
                $sectors = [
                    ['from' => 'Juba', 'to' => 'Nairobi'],
                    ['from' => 'Juba', 'to' => 'Entebbe'],
                    ['from' => 'Addis Ababa', 'to' => 'Goma'],
                    ['from' => 'Regional hubs', 'to' => 'Remote strips'],
                ];
            @endphp

            @foreach($sectors as $sector)
                <article style="background:#ffffff; border:1px solid #e5e7eb; border-radius:1rem; padding:1rem 1.05rem; box-shadow:0 12px 25px rgba(15,23,42,0.06); display:flex; flex-direction:column; gap:0.25rem;">
                    <div style="font-size:0.8rem; color:#6b7280;">Preferred sector</div>
                    <div style="font-size:1.05rem; font-weight:700; color:#071937;">{{ $sector['from'] }} → {{ $sector['to'] }}</div>
                    <p style="margin:0; font-size:0.85rem; color:#4b5563;">Customizable times, handling, and catering.</p>
                </article>
            @endforeach
        </div>
    </section>

    <section style="margin-top:2.6rem;">
        <div style="border-radius:1.3rem; padding:1.15rem 1.2rem; background:linear-gradient(140deg,#0b3d91,#1e3a8a); color:#e5e7ff; display:flex; flex-wrap:wrap; gap:1rem; align-items:center; justify-content:space-between;">
            <div>
                <div style="font-size:0.82rem; opacity:0.9; margin-bottom:0.25rem;">Concierge</div>
                <h3 style="margin:0; font-size:1.18rem;">Share departure window, guest count, and special handling notes.</h3>
            </div>
            <div style="display:flex; flex-wrap:wrap; gap:0.6rem;">
                <a href="{{ route('book') }}" class="hb-btn hb-btn-primary" style="background:#facc15; color:#1f2937;">Start itinerary</a>
                <a href="{{ route('services.medevac') }}" class="hb-btn hb-btn-outline" style="border-color:rgba(226,232,255,0.6);">View medevac</a>
            </div>
        </div>
    </section>
</div>
@endsection
