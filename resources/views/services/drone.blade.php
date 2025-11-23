{{-- resources/views/services/drone.blade.php --}}
@extends('layouts.app')

@section('title', 'Habeshair – Drone Operations')

@section('content')
<div class="hb-container">
    <section style="display:flex; flex-wrap:wrap; gap:2rem; align-items:flex-start;">
        <div style="flex:1 1 320px; min-width:260px;">
            <div style="display:inline-flex; align-items:center; padding:0.3rem 0.8rem; border-radius:999px; background:rgba(14,116,144,0.08); color:#0b3d91; font-size:0.82rem; font-weight:700; margin-bottom:0.75rem;">
                <span style="font-size:0.95rem; margin-right:0.35rem;">◎</span>
                Drone surveys & monitoring
            </div>

            <h1 style="font-size:2.05rem; line-height:1.1; margin:0 0 0.7rem; color:#071937;">
                Aerial data capture for mapping, inspection, and security.
            </h1>

            <p style="font-size:0.98rem; color:#4b5563; margin:0 0 1.1rem; max-width:30rem;">
                RPAS crews deliver geospatial data, inspections, and perimeter monitoring—coordinated with local authorities and your field teams.
            </p>

            <div style="display:flex; flex-wrap:wrap; gap:0.7rem;">
                <a href="{{ route('contact') }}" class="hb-btn hb-btn-primary">Schedule a survey</a>
                <a href="{{ route('services.cargo') }}" class="hb-btn hb-btn-outline" style="color:#0b3d91; border-color:#c7d7ff;">Logistics support</a>
            </div>
        </div>

        <div style="flex:1 1 260px; min-width:240px;">
            <div style="background:#ffffff; border-radius:1.25rem; padding:1.05rem 1.15rem; box-shadow:0 18px 35px rgba(15,23,42,0.12); border:1px solid #e5e7eb;">
                <div style="font-size:0.85rem; color:#6b7280; margin-bottom:0.5rem;">Applications</div>
                <ul style="margin:0; padding-left:1.05rem; color:#071937; font-size:0.92rem; line-height:1.55;">
                    <li>Topographic mapping and photogrammetry</li>
                    <li>Pipeline, road, and camp inspections</li>
                    <li>Security overwatch and perimeter sweeps</li>
                    <li>Post-disaster assessment</li>
                </ul>
            </div>
        </div>
    </section>

    <section style="margin-top:2.6rem;">
        <h2 style="font-size:1.3rem; color:#071937; margin:0 0 0.5rem;">Mission setup checklist</h2>
        <p style="font-size:0.9rem; color:#4b5563; margin:0 0 1rem;">Share location, airspace notes, and output format. We will confirm permits, NOTAMs, and deliverables.</p>

        <div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(230px,1fr)); gap:1rem;">
            @php
                $items = [
                    ['title' => 'Site recon', 'desc' => 'Ground risk assessment and launch/recovery plan.'],
                    ['title' => 'Data brief', 'desc' => 'Outputs in orthomosaic, 3D model, or raw imagery.'],
                    ['title' => 'Airspace coordination', 'desc' => 'Flight approvals and NOTAM coordination handled for you.'],
                    ['title' => 'Delivery', 'desc' => 'Secure file transfer and review call with your team.'],
                ];
            @endphp

            @foreach($items as $item)
                <article style="background:#ffffff; border:1px solid #e5e7eb; border-radius:1rem; padding:1rem 1.05rem; box-shadow:0 12px 25px rgba(15,23,42,0.06);">
                    <h3 style="margin:0 0 0.35rem; font-size:1rem; color:#0b3d91;">{{ $item['title'] }}</h3>
                    <p style="margin:0; font-size:0.85rem; color:#4b5563;">{{ $item['desc'] }}</p>
                </article>
            @endforeach
        </div>
    </section>

    <section style="margin-top:2.6rem;">
        <div style="border-radius:1.3rem; padding:1.15rem 1.2rem; background:linear-gradient(140deg,#0b3d91,#1e3a8a); color:#e5e7ff; display:flex; flex-wrap:wrap; gap:1rem; align-items:center; justify-content:space-between;">
            <div>
                <div style="font-size:0.82rem; opacity:0.9; margin-bottom:0.25rem;">Need fast imagery?</div>
                <h3 style="margin:0; font-size:1.18rem;">We deploy RPAS crews with clear data specs and safety cases.</h3>
            </div>
            <div style="display:flex; flex-wrap:wrap; gap:0.6rem;">
                <a href="{{ route('contact') }}" class="hb-btn hb-btn-primary" style="background:#facc15; color:#1f2937;">Schedule a call</a>
                <a href="{{ route('services.air-charter') }}" class="hb-btn hb-btn-outline" style="border-color:rgba(226,232,255,0.6);">View air charter</a>
            </div>
        </div>
    </section>
</div>
@endsection
