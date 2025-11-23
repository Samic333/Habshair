{{-- resources/views/services/air-charter.blade.php --}}
@extends('layouts.app')

@section('title', 'Habeshair – Air Charter')

@section('content')
<div class="hb-container">
    <section style="display:flex; flex-wrap:wrap; gap:2rem; align-items:flex-start;">
        <div style="flex:1 1 320px; min-width:260px;">
            <div style="display:inline-flex; align-items:center; padding:0.3rem 0.8rem; border-radius:999px; background:rgba(14,116,144,0.08); color:#0b3d91; font-size:0.82rem; font-weight:700; margin-bottom:0.75rem;">
                <span style="width:9px; height:9px; border-radius:999px; background:#22c55e; margin-right:0.35rem;"></span>
                Air Charter services
            </div>

            <h1 style="font-size:2.1rem; line-height:1.1; margin:0 0 0.7rem; color:#071937;">
                Point-to-point charters tailored to your mission.
            </h1>

            <p style="font-size:0.98rem; color:#4b5563; margin:0 0 1.2rem; max-width:30rem;">
                Dedicated Cessna Caravan and regional operations for NGOs, project teams, and scheduled contract flying. We position quickly, fly into challenging strips, and keep communication clear.
            </p>

            <div style="display:flex; flex-wrap:wrap; gap:0.7rem;">
                <a href="{{ route('book') }}" class="hb-btn hb-btn-primary">Request a charter</a>
                <a href="{{ route('routes') }}" class="hb-btn hb-btn-outline" style="color:#0b3d91; border-color:#c7d7ff;">View sample routes</a>
            </div>
        </div>

        <div style="flex:1 1 260px; min-width:240px;">
            <div style="background:#ffffff; border-radius:1.25rem; padding:1.1rem 1.2rem; box-shadow:0 18px 35px rgba(15,23,42,0.12); border:1px solid #e5e7eb;">
                <div style="font-size:0.85rem; color:#6b7280; margin-bottom:0.5rem;">Ops readiness</div>
                <ul style="margin:0; padding-left:1.05rem; color:#071937; font-size:0.92rem; line-height:1.6;">
                    <li>Rapid launch for humanitarian and field missions</li>
                    <li>Performance planning for short/remote strips</li>
                    <li>Flexible cabin layouts: pax, cargo, or mix</li>
                    <li>24/7 ops desk and flight monitoring</li>
                </ul>
            </div>
        </div>
    </section>

    <section style="margin-top:2.75rem;">
        <h2 style="font-size:1.35rem; color:#071937; margin:0 0 0.5rem;">Mission profiles we support</h2>
        <p style="font-size:0.9rem; color:#4b5563; margin:0 0 1rem;">Use these as starting points; we will tailor the sector, payload, and schedule to your needs.</p>

        <div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(230px,1fr)); gap:1rem;">
            @php
                $missions = [
                    ['title' => 'Humanitarian access', 'desc' => 'Charters to refugee camps, medical sites, and border towns with low infrastructure.'],
                    ['title' => 'Project crew moves', 'desc' => 'Shuttles for engineers and NGO teams between hubs and remote strips.'],
                    ['title' => 'Cargo uplift', 'desc' => 'Dedicated aircraft for relief goods, spares, and last-mile freight.'],
                    ['title' => 'Contract flying', 'desc' => 'Multi-week or seasonal basing with guaranteed availability.'],
                ];
            @endphp

            @foreach($missions as $mission)
                <article style="background:#ffffff; border:1px solid #e5e7eb; border-radius:1rem; padding:1rem 1.05rem; box-shadow:0 12px 25px rgba(15,23,42,0.06);">
                    <h3 style="margin:0 0 0.4rem; font-size:1rem; color:#0b3d91;">{{ $mission['title'] }}</h3>
                    <p style="margin:0; font-size:0.85rem; color:#4b5563;">{{ $mission['desc'] }}</p>
                </article>
            @endforeach
        </div>
    </section>

    <section style="margin-top:2.75rem;">
        <div style="border-radius:1.3rem; padding:1.2rem 1.25rem; background:linear-gradient(140deg,#0b3d91,#1e3a8a); color:#e5e7ff; display:flex; flex-wrap:wrap; gap:1rem; align-items:center; justify-content:space-between;">
            <div>
                <div style="font-size:0.82rem; opacity:0.9; margin-bottom:0.25rem;">Ops coordination</div>
                <h3 style="margin:0; font-size:1.2rem;">Share your sector and payload, we’ll propose options.</h3>
            </div>
            <div style="display:flex; flex-wrap:wrap; gap:0.6rem;">
                <a href="{{ route('book') }}" class="hb-btn hb-btn-primary" style="background:#facc15; color:#1f2937;">Start a request</a>
                <a href="{{ route('contact') }}" class="hb-btn hb-btn-outline" style="border-color:rgba(226,232,255,0.6);">Talk to ops</a>
            </div>
        </div>
    </section>
</div>
@endsection
