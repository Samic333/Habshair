{{-- resources/views/about.blade.php --}}
@extends('layouts.app')

@section('title', 'About Habeshair')

@section('content')
<div class="hb-container">
    <section style="display:flex; flex-wrap:wrap; gap:2rem; align-items:flex-start;">
        <div style="flex:1 1 320px; min-width:260px;">
            <div style="display:inline-flex; align-items:center; padding:0.3rem 0.8rem; border-radius:999px; background:rgba(14,116,144,0.08); color:#0b3d91; font-size:0.82rem; font-weight:700; margin-bottom:0.75rem;">
                <span style="font-size:0.95rem; margin-right:0.35rem;">◆</span>
                About the team
            </div>

            <h1 style="font-size:2.05rem; line-height:1.12; margin:0 0 0.7rem; color:#071937;">
                Purpose-built for regional and humanitarian aviation.
            </h1>

            <p style="font-size:0.98rem; color:#4b5563; margin:0 0 1.1rem; max-width:30rem;">
                Habeshair connects communities with reliable flights, drawing on crews and dispatchers experienced in East African operations. Replace the placeholders below with your own story and milestones.
            </p>

            <div style="display:flex; flex-wrap:wrap; gap:0.7rem;">
                <a href="{{ route('contact') }}" class="hb-btn hb-btn-primary">Contact leadership</a>
                <a href="{{ route('routes') }}" class="hb-btn hb-btn-outline" style="color:#0b3d91; border-color:#c7d7ff;">View our network</a>
            </div>
        </div>

        <div style="flex:1 1 260px; min-width:240px;">
            <div style="background:#ffffff; border-radius:1.25rem; padding:1.05rem 1.15rem; box-shadow:0 18px 35px rgba(15,23,42,0.12); border:1px solid #e5e7eb;">
                <div style="font-size:0.85rem; color:#6b7280; margin-bottom:0.5rem;">Quick facts</div>
                <ul style="margin:0; padding-left:1.05rem; color:#071937; font-size:0.92rem; line-height:1.55;">
                    <li>Regional focus: East and Central Africa</li>
                    <li>Aircraft: Caravan fleet configured for pax/cargo</li>
                    <li>Capabilities: remote strips, medevac, charter</li>
                    <li>Team: line pilots, dispatchers, maintenance leads</li>
                </ul>
            </div>
        </div>
    </section>

    <section style="margin-top:2.6rem; display:grid; grid-template-columns:repeat(auto-fit,minmax(240px,1fr)); gap:1rem;">
        @php
            $pillars = [
                ['title' => 'Safety first', 'desc' => 'Procedures aligned with ICAO guidance and disciplined training routines.'],
                ['title' => 'Mission mindset', 'desc' => 'Built around the needs of NGOs, projects, and communities relying on reliable lift.'],
                ['title' => 'Local expertise', 'desc' => 'Teams with deep knowledge of regional strips, weather, and partners.'],
            ];
        @endphp

        @foreach($pillars as $pillar)
            <article style="background:#ffffff; border:1px solid #e5e7eb; border-radius:1rem; padding:1rem 1.05rem; box-shadow:0 12px 25px rgba(15,23,42,0.06);">
                <h3 style="margin:0 0 0.35rem; font-size:1rem; color:#0b3d91;">{{ $pillar['title'] }}</h3>
                <p style="margin:0; font-size:0.85rem; color:#4b5563;">{{ $pillar['desc'] }}</p>
            </article>
        @endforeach
    </section>

    <section style="margin-top:2.6rem;">
        <div style="border-radius:1.3rem; padding:1.15rem 1.2rem; background:linear-gradient(140deg,#0b3d91,#1e3a8a); color:#e5e7ff; display:flex; flex-wrap:wrap; gap:1rem; align-items:center; justify-content:space-between;">
            <div>
                <div style="font-size:0.82rem; opacity:0.9; margin-bottom:0.25rem;">Careers & partnerships</div>
                <h3 style="margin:0; font-size:1.18rem;">Looking to collaborate on routes, training, or maintenance?</h3>
            </div>
            <div style="display:flex; flex-wrap:wrap; gap:0.6rem;">
                <a href="{{ route('contact') }}" class="hb-btn hb-btn-primary" style="background:#facc15; color:#1f2937;">Reach out</a>
                <a href="{{ route('services.cargo') }}" class="hb-btn hb-btn-outline" style="border-color:rgba(226,232,255,0.6);">See cargo</a>
            </div>
        </div>
    </section>
</div>
@endsection
