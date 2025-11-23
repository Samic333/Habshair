{{-- resources/views/client/dashboard.blade.php --}}
@extends('layouts.app')

@section('title', 'Client Dashboard')

@section('content')
<div class="hb-container">
    <section style="display:flex; flex-wrap:wrap; gap:1.5rem; align-items:flex-start;">
        <div style="flex:1 1 320px; min-width:260px;">
            <div style="display:inline-flex; align-items:center; padding:0.3rem 0.8rem; border-radius:999px; background:rgba(14,116,144,0.08); color:#0b3d91; font-size:0.82rem; font-weight:700; margin-bottom:0.75rem;">
                <span style="font-size:0.95rem; margin-right:0.35rem;">▣</span>
                Client dashboard preview
            </div>

            <h1 style="font-size:2rem; line-height:1.12; margin:0 0 0.65rem; color:#071937;">
                Manage trips, passengers, and support tickets in one place.
            </h1>

            <p style="font-size:0.96rem; color:#4b5563; margin:0 0 1rem; max-width:30rem;">
                Placeholder dashboard for future portal. Use it to outline what you’ll show once authenticated—trip history, manifests, payments, and operations updates.
            </p>

            <div style="display:flex; flex-wrap:wrap; gap:0.7rem;">
                <a href="{{ route('book') }}" class="hb-btn hb-btn-primary">Book a flight</a>
                <a href="{{ route('services.air-charter') }}" class="hb-btn hb-btn-outline" style="color:#0b3d91; border-color:#c7d7ff;">Charter options</a>
            </div>
        </div>

        <div style="flex:1 1 280px; min-width:260px; display:grid; gap:0.8rem;">
            @php
                $stats = [
                    ['label' => 'Upcoming trips', 'value' => '3', 'hint' => 'Placeholder items'],
                    ['label' => 'Passengers this month', 'value' => '18', 'hint' => 'Manifests ready'],
                    ['label' => 'Open support tickets', 'value' => '1', 'hint' => 'Awaiting response'],
                ];
            @endphp

            @foreach($stats as $stat)
                <div style="background:#ffffff; border-radius:1rem; padding:0.9rem 1rem; box-shadow:0 12px 25px rgba(15,23,42,0.08); border:1px solid #e5e7eb; display:flex; justify-content:space-between; align-items:center;">
                    <div>
                        <div style="font-size:0.85rem; color:#6b7280;">{{ $stat['label'] }}</div>
                        <div style="font-size:0.8rem; color:#94a3b8;">{{ $stat['hint'] }}</div>
                    </div>
                    <div style="font-size:1.2rem; font-weight:700; color:#071937;">{{ $stat['value'] }}</div>
                </div>
            @endforeach
        </div>
    </section>

    <section style="margin-top:2.4rem;">
        <h2 style="font-size:1.25rem; color:#071937; margin:0 0 0.5rem;">What you’ll manage here</h2>
        <p style="font-size:0.9rem; color:#4b5563; margin:0 0 1rem;">Outline the modules you plan to build. Swap in your own copy when the portal is live.</p>

        <div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(230px,1fr)); gap:1rem;">
            @php
                $cards = [
                    ['title' => 'Trips & charters', 'desc' => 'See upcoming flights, tickets, and aircraft assignments.'],
                    ['title' => 'Passenger manifests', 'desc' => 'Add passenger details, IDs, and special assistance notes.'],
                    ['title' => 'Invoices & receipts', 'desc' => 'Download statements and track payments per project.'],
                    ['title' => 'Support & changes', 'desc' => 'Open change requests, baggage updates, or mission notes.'],
                ];
            @endphp

            @foreach($cards as $card)
                <article style="background:#ffffff; border:1px solid #e5e7eb; border-radius:1rem; padding:1rem 1.05rem; box-shadow:0 12px 25px rgba(15,23,42,0.06);">
                    <h3 style="margin:0 0 0.35rem; font-size:1rem; color:#0b3d91;">{{ $card['title'] }}</h3>
                    <p style="margin:0; font-size:0.85rem; color:#4b5563;">{{ $card['desc'] }}</p>
                </article>
            @endforeach
        </div>
    </section>

    <section style="margin-top:2.4rem;">
        <div style="border-radius:1.3rem; padding:1.1rem 1.2rem; background:linear-gradient(140deg,#0b3d91,#1e3a8a); color:#e5e7ff; display:flex; flex-wrap:wrap; gap:1rem; align-items:center; justify-content:space-between;">
            <div>
                <div style="font-size:0.82rem; opacity:0.9; margin-bottom:0.25rem;">Need access?</div>
                <h3 style="margin:0; font-size:1.18rem;">We’ll invite your team when the portal goes live.</h3>
            </div>
            <div style="display:flex; flex-wrap:wrap; gap:0.6rem;">
                <a href="{{ route('contact') }}" class="hb-btn hb-btn-primary" style="background:#facc15; color:#1f2937;">Join waitlist</a>
                <a href="{{ route('services.cargo') }}" class="hb-btn hb-btn-outline" style="border-color:rgba(226,232,255,0.6);">Cargo support</a>
            </div>
        </div>
    </section>
</div>
@endsection
