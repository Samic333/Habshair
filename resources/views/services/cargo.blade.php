{{-- resources/views/services/cargo.blade.php --}}
@extends('layouts.app')

@section('title', 'Habeshair – Cargo Charters')

@section('content')
<div class="hb-container">
    <section style="display:flex; flex-wrap:wrap; gap:2rem; align-items:flex-start;">
        <div style="flex:1 1 320px; min-width:260px;">
            <div style="display:inline-flex; align-items:center; padding:0.3rem 0.8rem; border-radius:999px; background:rgba(14,116,144,0.08); color:#0b3d91; font-size:0.82rem; font-weight:700; margin-bottom:0.75rem;">
                <span style="font-size:0.95rem; margin-right:0.35rem;">▣</span>
                Cargo uplift & last mile
            </div>

            <h1 style="font-size:2.1rem; line-height:1.1; margin:0 0 0.7rem; color:#071937;">
                Move relief goods and project cargo where roads stop.
            </h1>

            <p style="font-size:0.98rem; color:#4b5563; margin:0 0 1.2rem; max-width:30rem;">
                We configure the Caravan for pallets, crates, or mixed loads. Our team coordinates permits, handling, and last-mile delivery with your ground partners.
            </p>

            <div style="display:flex; flex-wrap:wrap; gap:0.7rem;">
                <a href="{{ route('book') }}" class="hb-btn hb-btn-primary">Book cargo uplift</a>
                <a href="{{ route('contact') }}" class="hb-btn hb-btn-outline" style="color:#0b3d91; border-color:#c7d7ff;">Talk to cargo desk</a>
            </div>
        </div>

        <div style="flex:1 1 260px; min-width:240px;">
            <div style="background:#ffffff; border-radius:1.25rem; padding:1.05rem 1.15rem; box-shadow:0 18px 35px rgba(15,23,42,0.12); border:1px solid #e5e7eb;">
                <div style="font-size:0.85rem; color:#6b7280; margin-bottom:0.5rem;">Typical cargo</div>
                <ul style="margin:0; padding-left:1.05rem; color:#071937; font-size:0.92rem; line-height:1.55;">
                    <li>Medical kits and cold chain boxes</li>
                    <li>Food relief, WFP consignments, and parcels</li>
                    <li>Construction tools and project supplies</li>
                    <li>High-priority spare parts</li>
                </ul>
            </div>
        </div>
    </section>

    <section style="margin-top:2.5rem;">
        <h2 style="font-size:1.35rem; color:#071937; margin:0 0 0.5rem;">How we plan your shipment</h2>
        <p style="font-size:0.9rem; color:#4b5563; margin:0 0 1rem;">Confirm payload, handling constraints, and any cold chain requirements—then we slot the best strip and timing.</p>

        <div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(230px,1fr)); gap:1rem;">
            @php
                $steps = [
                    ['title' => 'Payload brief', 'desc' => 'Share dimensions, weight, and packing type so we can configure the aircraft.'],
                    ['title' => 'Route design', 'desc' => 'We map fuel stops and alternates across border and remote strips.'],
                    ['title' => 'Permits & handling', 'desc' => 'Our team coordinates ground handlers and permit lead times.'],
                    ['title' => 'Monitoring', 'desc' => 'Live updates from wheels-up to handover with your consignee.'],
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
        <div style="border-radius:1.3rem; padding:1.2rem 1.25rem; background:#0b3d91; color:#e5e7ff; display:flex; flex-wrap:wrap; gap:1rem; align-items:center; justify-content:space-between;">
            <div>
                <div style="font-size:0.82rem; opacity:0.9; margin-bottom:0.25rem;">Next step</div>
                <h3 style="margin:0; font-size:1.2rem;">Tell us your payload and delivery point.</h3>
            </div>
            <div style="display:flex; flex-wrap:wrap; gap:0.6rem;">
                <a href="{{ route('book') }}" class="hb-btn hb-btn-primary" style="background:#facc15; color:#1f2937;">Start cargo brief</a>
                <a href="{{ route('services.air-charter') }}" class="hb-btn hb-btn-outline" style="border-color:rgba(226,232,255,0.6);">See air charter</a>
            </div>
        </div>
    </section>
</div>
@endsection
