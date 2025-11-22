{{-- resources/views/home.blade.php --}}
@extends('layouts.app')

@section('title', 'Habeshair – Regional & Humanitarian Flights')

@section('content')
<div class="hb-container">

    {{-- HERO --}}
    <section style="display:flex; flex-wrap:wrap; gap:2rem; align-items:center;">
        <div style="flex:1 1 280px; min-width:260px;">
            <div style="display:inline-flex; align-items:center; padding:0.25rem 0.75rem; border-radius:999px; background:rgba(14,116,144,0.08); color:#0b3d91; font-size:0.8rem; font-weight:600; margin-bottom:0.75rem;">
                <span style="font-size:1rem; margin-right:0.35rem;">●</span>
                Trusted regional & humanitarian operator
            </div>

            <h1 style="font-size:2.4rem; line-height:1.1; margin:0 0 0.75rem; color:#071937;">
                Fly closer to the heart of Africa.
            </h1>

            <p style="font-size:0.98rem; max-width:28rem; color:#4b5563; margin-bottom:1.4rem;">
                Habeshair connects remote communities, cargo, and humanitarian missions across East Africa
                with safe, reliable Caravan operations and experienced crews.
            </p>

            <div style="display:flex; flex-wrap:wrap; gap:0.75rem; align-items:center;">
                <a href="{{ route('book') }}" class="hb-btn hb-btn-primary">
                    Book a flight
                </a>

                <a href="{{ route('routes') }}" class="hb-btn hb-btn-outline">
                    View all routes
                </a>

                <div style="font-size:0.78rem; color:#6b7280;">
                    <strong>24/7 ops desk</strong> · Priority support for critical missions
                </div>
            </div>
        </div>

        <div style="flex:1 1 260px; min-width:260px;">
            <div style="position:relative; padding:1rem;">
                <div style="border-radius:1.5rem; overflow:hidden; background:linear-gradient(145deg,#0b3d91,#1e90ff); padding:1.5rem; color:#e5f2ff; box-shadow:0 20px 40px rgba(15,23,42,0.35);">
                    <div style="font-size:0.78rem; text-transform:uppercase; letter-spacing:0.12em; opacity:0.9; margin-bottom:0.65rem;">
                        Today’s featured sector
                    </div>
                    <div style="font-size:1.2rem; font-weight:600; margin-bottom:0.25rem;">
                        Juba ✈ Goma
                    </div>
                    <div style="font-size:0.85rem; margin-bottom:0.85rem;">
                        Humanitarian & cargo uplift · Caravan 208
                    </div>

                    <div style="display:flex; justify-content:space-between; gap:1rem; font-size:0.78rem; margin-bottom:0.75rem;">
                        <div>
                            <div style="opacity:0.75;">Block time</div>
                            <div>1h 40m*</div>
                        </div>
                        <div>
                            <div style="opacity:0.75;">Frequency</div>
                            <div>On demand</div>
                        </div>
                        <div>
                            <div style="opacity:0.75;">Payload</div>
                            <div>Up to 1.1t</div>
                        </div>
                    </div>

                    <div style="display:flex; justify-content:space-between; align-items:center; font-size:0.78rem; border-top:1px dashed rgba(226,232,255,0.4); padding-top:0.75rem; margin-top:0.25rem;">
                        <span>*Route and timing subject to permits & weather</span>
                        <a href="{{ route('book') }}" style="color:#facc15; font-weight:600;">Request sector →</a>
                    </div>
                </div>

                <div style="position:absolute; inset:auto 1rem -0.75rem auto; background:#ffffff; border-radius:999px; padding:0.35rem 0.85rem; font-size:0.75rem; display:flex; align-items:center; gap:0.35rem; box-shadow:0 8px 20px rgba(15,23,42,0.25);">
                    <span style="width:8px; height:8px; border-radius:999px; background:#22c55e;"></span>
                    On-time performance <strong>98%</strong>
                </div>
            </div>
        </div>
    </section>

    {{-- HIGHLIGHTS --}}
    <section style="margin-top:3rem;">
        <h2 style="font-size:1.5rem; margin-bottom:0.6rem; color:#071937;">Why operators choose Habeshair</h2>
        <p style="font-size:0.9rem; color:#4b5563; margin-bottom:1.4rem;">
            Designed for NGO charters, medical evacuations, cargo contracts, and scheduled regional services.
        </p>

        <div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(220px,1fr)); gap:1.1rem;">
            <article style="background:#ffffff; border-radius:1rem; padding:1.1rem 1.2rem; box-shadow:0 10px 22px rgba(15,23,42,0.08);">
                <h3 style="font-size:1rem; margin:0 0 0.4rem; color:#0b3d91;">Safety-first operations</h3>
                <p style="font-size:0.85rem; color:#4b5563; margin:0;">
                    ICAO-compliant procedures, disciplined crew training, and rigorous maintenance culture built by active line pilots.
                </p>
            </article>

            <article style="background:#ffffff; border-radius:1rem; padding:1.1rem 1.2rem; box-shadow:0 10px 22px rgba(15,23,42,0.08);">
                <h3 style="font-size:1rem; margin:0 0 0.4rem; color:#0b3d91;">Remote & challenging strips</h3>
                <p style="font-size:0.85rem; color:#4b5563; margin:0;">
                    Specialized in short, unpaved, and remote airfields with careful performance planning and route risk assessment.
                </p>
            </article>

            <article style="background:#ffffff; border-radius:1rem; padding:1.1rem 1.2rem; box-shadow:0 10px 22px rgba(15,23,42,0.08);">
                <h3 style="font-size:1rem; margin:0 0 0.4rem; color:#0b3d91;">Cargo & humanitarian focus</h3>
                <p style="font-size:0.85rem; color:#4b5563; margin:0;">
                    Flexible cabin configuration for cargo, relief goods, and mixed missions, aligned with NGO and UN requirements.
                </p>
            </article>
        </div>
    </section>

    {{-- ROUTES / SCHEDULE PREVIEW --}}
    <section style="margin-top:3rem;">
        <div style="display:flex; justify-content:space-between; align-items:flex-end; gap:1rem; margin-bottom:0.9rem;">
            <div>
                <h2 style="font-size:1.45rem; margin:0 0 0.4rem; color:#071937;">Sample routes & sectors</h2>
                <p style="font-size:0.87rem; color:#4b5563; margin:0;">
                    Explore our growing network of regional routes and charter corridors.
                </p>
            </div>
            <a href="{{ route('routes') }}" class="hb-btn hb-btn-outline">
                Open full route map
            </a>
        </div>

        <div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(240px,1fr)); gap:1rem;">
            @php
                $sampleRoutes = [
                    ['from' => 'Juba (JUB)', 'to' => 'Goma (GOM)', 'type' => 'Humanitarian / Cargo', 'days' => 'On demand'],
                    ['from' => 'Juba (JUB)', 'to' => 'Entebbe (EBB)', 'type' => 'Passengers / Cargo', 'days' => 'Several times weekly'],
                    ['from' => 'Regional', 'to' => 'Remote strips', 'type' => 'Charter / MedEvac', 'days' => '24/7 on request'],
                ];
            @endphp

            @foreach($sampleRoutes as $r)
                <article style="background:#ffffff; border-radius:1rem; padding:1rem 1.1rem; border:1px solid #e5e7eb;">
                    <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:0.4rem;">
                        <div style="font-size:0.85rem; color:#6b7280;">Sector</div>
                        <span style="font-size:0.7rem; padding:0.1rem 0.6rem; border-radius:999px; background:#ecfeff; color:#0369a1;">
                            {{ $r['type'] }}
                        </span>
                    </div>
                    <div style="font-size:1.05rem; font-weight:600; color:#071937; margin-bottom:0.35rem;">
                        {{ $r['from'] }} → {{ $r['to'] }}
                    </div>
                    <div style="font-size:0.82rem; color:#4b5563; margin-bottom:0.65rem;">
                        {{ $r['days'] }}
                    </div>
                    <a href="{{ route('book') }}" style="font-size:0.8rem; color:#0b3d91; font-weight:600;">
                        Request this flight →
                    </a>
                </article>
            @endforeach
        </div>
    </section>

    {{-- FINAL CTA --}}
    <section style="margin-top:3rem;">
        <div style="border-radius:1.5rem; padding:1.3rem 1.4rem; background:linear-gradient(135deg,#0b3d91,#1e3a8a); color:#e5e7ff; display:flex; flex-wrap:wrap; align-items:center; justify-content:space-between; gap:1rem;">
            <div>
                <h2 style="font-size:1.35rem; margin:0 0 0.4rem;">Planning a mission or new route?</h2>
                <p style="font-size:0.87rem; margin:0;">
                    Talk to our operations team about basing, contract flying, or humanitarian corridors.
                </p>
            </div>
            <div style="display:flex; flex-wrap:wrap; gap:0.6rem;">
                <a href="{{ route('book') }}" class="hb-btn hb-btn-primary" style="background: #facc15; color:#1f2937;">
                    Request charter
                </a>
                <a href="{{ route('help') }}" class="hb-btn hb-btn-outline" style="border-color:rgba(226,232,255,0.7);">
                    Contact operations
                </a>
            </div>
        </div>
    </section>
</div>
@endsection
