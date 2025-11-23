{{-- resources/views/fleet/index.blade.php --}}
@extends('layouts.app')

@section('title', 'Habeshair – Fleet')

@section('content')
<div class="hb-container">
    <section style="display:flex; flex-wrap:wrap; gap:2rem; align-items:flex-start;">
        <div style="flex:1 1 320px; min-width:260px;">
            <div style="display:inline-flex; align-items:center; padding:0.3rem 0.8rem; border-radius:999px; background:rgba(14,116,144,0.08); color:#0b3d91; font-size:0.82rem; font-weight:700; margin-bottom:0.75rem;">
                <span style="font-size:0.95rem; margin-right:0.35rem;">✈︎</span>
                Fleet overview
            </div>

            <h1 style="font-size:2.05rem; line-height:1.12; margin:0 0 0.7rem; color:#071937;">
                Aircraft suited for remote strips and reliable regional flying.
            </h1>

            <p style="font-size:0.98rem; color:#4b5563; margin:0 0 1.1rem; max-width:30rem;">
                A focused fleet keeps training, spares, and procedures tight. Below are placeholders—swap in your exact tail numbers, configs, and performance notes.
            </p>

            <div style="display:flex; flex-wrap:wrap; gap:0.7rem;">
                <a href="{{ route('book') }}" class="hb-btn hb-btn-primary">Plan with ops</a>
                <a href="{{ route('services.air-charter') }}" class="hb-btn hb-btn-outline" style="color:#0b3d91; border-color:#c7d7ff;">Air charter</a>
            </div>
        </div>

        <div style="flex:1 1 260px; min-width:240px;">
            <div style="background:#ffffff; border-radius:1.25rem; padding:1.05rem 1.15rem; box-shadow:0 18px 35px rgba(15,23,42,0.12); border:1px solid #e5e7eb;">
                <div style="font-size:0.85rem; color:#6b7280; margin-bottom:0.5rem;">Ops notes</div>
                <ul style="margin:0; padding-left:1.05rem; color:#071937; font-size:0.92rem; line-height:1.55;">
                    <li>Short/rough strip experience</li>
                    <li>Balanced for cargo, pax, and medevac</li>
                    <li>Standardized avionics for crew familiarity</li>
                    <li>Strong dispatch reliability in region</li>
                </ul>
            </div>
        </div>
    </section>

    <section style="margin-top:2.6rem;">
        <h2 style="font-size:1.3rem; color:#071937; margin:0 0 0.5rem;">Fleet lineup</h2>
        <p style="font-size:0.9rem; color:#4b5563; margin:0 0 1rem;">Replace the placeholders below with your actual aircraft types, payloads, and range data.</p>

        <div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(240px,1fr)); gap:1rem;">
            @php
                $fleet = [
                    ['type' => 'Cessna 208 Caravan', 'role' => 'Passengers / Cargo / Medevac', 'range' => '750 nm', 'notes' => 'Great for short, unpaved strips with mixed configs.'],
                    ['type' => 'Cessna 208B Grand Caravan', 'role' => 'Cargo / Charter', 'range' => '850 nm', 'notes' => 'Higher payload for relief goods and commuter runs.'],
                    ['type' => 'Light Twin (placeholder)', 'role' => 'VIP / Shuttle', 'range' => '900 nm', 'notes' => 'Swap in your twin or jet option if applicable.'],
                ];
            @endphp

            @foreach($fleet as $aircraft)
                <article style="background:#ffffff; border:1px solid #e5e7eb; border-radius:1rem; padding:1rem 1.05rem; box-shadow:0 12px 25px rgba(15,23,42,0.06); display:flex; flex-direction:column; gap:0.25rem;">
                    <div style="font-size:0.9rem; color:#6b7280;">{{ $aircraft['role'] }}</div>
                    <div style="font-size:1.05rem; font-weight:700; color:#071937;">{{ $aircraft['type'] }}</div>
                    <div style="font-size:0.85rem; color:#4b5563;">Range: {{ $aircraft['range'] }}</div>
                    <p style="margin:0; font-size:0.85rem; color:#4b5563;">{{ $aircraft['notes'] }}</p>
                </article>
            @endforeach
        </div>
    </section>

    <section style="margin-top:2.6rem;">
        <div style="border-radius:1.3rem; padding:1.15rem 1.2rem; background:#0b3d91; color:#e5e7ff; display:flex; flex-wrap:wrap; gap:1rem; align-items:center; justify-content:space-between;">
            <div>
                <div style="font-size:0.82rem; opacity:0.9; margin-bottom:0.25rem;">Need performance data?</div>
                <h3 style="margin:0; font-size:1.18rem;">Share your strip, payload, and alternates—we’ll run the numbers.</h3>
            </div>
            <div style="display:flex; flex-wrap:wrap; gap:0.6rem;">
                <a href="{{ route('book') }}" class="hb-btn hb-btn-primary" style="background:#facc15; color:#1f2937;">Request calculation</a>
                <a href="{{ route('services.cargo') }}" class="hb-btn hb-btn-outline" style="border-color:rgba(226,232,255,0.6);">Cargo services</a>
            </div>
        </div>
    </section>
</div>
@endsection
