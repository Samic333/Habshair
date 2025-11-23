{{-- resources/views/services/medevac.blade.php --}}
@extends('layouts.app')

@section('title', 'Habeshair – Medical Evacuation')

@section('content')
<div class="hb-container">
    <section style="display:flex; flex-wrap:wrap; gap:2rem; align-items:flex-start;">
        <div style="flex:1 1 320px; min-width:260px;">
            <div style="display:inline-flex; align-items:center; padding:0.3rem 0.8rem; border-radius:999px; background:rgba(14,116,144,0.08); color:#0b3d91; font-size:0.82rem; font-weight:700; margin-bottom:0.75rem;">
                <span style="font-size:0.95rem; margin-right:0.35rem;">✚</span>
                Medical evacuation
            </div>

            <h1 style="font-size:2.05rem; line-height:1.12; margin:0 0 0.7rem; color:#071937;">
                MedEvac flights with focused communication and quick launch.
            </h1>

            <p style="font-size:0.98rem; color:#4b5563; margin:0 0 1.1rem; max-width:30rem;">
                Coordinated with your medical partner or insurer, including strip suitability checks, stretcher fit, oxygen requirements, and on-ground transfer.
            </p>

            <div style="display:flex; flex-wrap:wrap; gap:0.7rem;">
                <a href="{{ route('contact') }}" class="hb-btn hb-btn-primary">Call medevac desk</a>
                <a href="{{ route('book') }}" class="hb-btn hb-btn-outline" style="color:#0b3d91; border-color:#c7d7ff;">Send patient brief</a>
            </div>
        </div>

        <div style="flex:1 1 260px; min-width:240px;">
            <div style="background:#ffffff; border-radius:1.25rem; padding:1.05rem 1.15rem; box-shadow:0 18px 35px rgba(15,23,42,0.12); border:1px solid #e5e7eb;">
                <div style="font-size:0.85rem; color:#6b7280; margin-bottom:0.5rem;">Critical checks</div>
                <ul style="margin:0; padding-left:1.05rem; color:#071937; font-size:0.92rem; line-height:1.55;">
                    <li>Patient status and medical escort details</li>
                    <li>Stretcher and oxygen configuration</li>
                    <li>Nearest suitable departure/arrival strips</li>
                    <li>Ground ambulance coordination</li>
                </ul>
            </div>
        </div>
    </section>

    <section style="margin-top:2.6rem;">
        <h2 style="font-size:1.3rem; color:#071937; margin:0 0 0.5rem;">Activation flow</h2>
        <p style="font-size:0.9rem; color:#4b5563; margin:0 0 1rem;">Use these steps as placeholders for your SOP; we will tune them to your medical provider.</p>

        <div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(230px,1fr)); gap:1rem;">
            @php
                $steps = [
                    ['title' => 'Case brief', 'desc' => 'Patient condition, weight, escorts, and receiving facility.'],
                    ['title' => 'Aircraft setup', 'desc' => 'Stretcher layout, oxygen, and infection control as required.'],
                    ['title' => 'Strip and weather', 'desc' => 'Performance check and alternates for current conditions.'],
                    ['title' => 'Go/no-go', 'desc' => 'Confirm with medical lead and dispatch crew.'],
                ];
            @endphp

            @foreach($steps as $step)
                <article style="background:#ffffff; border:1px solid #e5e7eb; border-radius:1rem; padding:1rem 1.05rem; box-shadow:0 12px 25px rgba(15,23,42,0.06);">
                    <h3 style="margin:0 0 0.35rem; font-size:1rem; color:#0b3d91;">{{ $step['title'] }}</h3>
                    <p style="margin:0; font-size:0.85rem; color:#4b5563;">{{ $step['desc'] }}</p>
                </article>
            @endforeach
        </div>
    </section>

    <section style="margin-top:2.6rem;">
        <div style="border-radius:1.3rem; padding:1.15rem 1.2rem; background:#0b3d91; color:#e5e7ff; display:flex; flex-wrap:wrap; gap:1rem; align-items:center; justify-content:space-between;">
            <div>
                <div style="font-size:0.82rem; opacity:0.9; margin-bottom:0.25rem;">24/7 coverage</div>
                <h3 style="margin:0; font-size:1.18rem;">Call anytime—our ops desk will connect you with the duty captain.</h3>
            </div>
            <div style="display:flex; flex-wrap:wrap; gap:0.6rem;">
                <a href="{{ route('contact') }}" class="hb-btn hb-btn-primary" style="background:#facc15; color:#1f2937;">Call ops desk</a>
                <a href="{{ route('services.vip') }}" class="hb-btn hb-btn-outline" style="border-color:rgba(226,232,255,0.6);">VIP alternative</a>
            </div>
        </div>
    </section>
</div>
@endsection
