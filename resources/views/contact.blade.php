{{-- resources/views/contact.blade.php --}}
@extends('layouts.app')

@section('title', 'Contact Habeshair')

@section('content')
<div class="hb-container">
    <section style="display:flex; flex-wrap:wrap; gap:2rem; align-items:flex-start;">
        <div style="flex:1 1 320px; min-width:260px;">
            <div style="display:inline-flex; align-items:center; padding:0.3rem 0.8rem; border-radius:999px; background:rgba(14,116,144,0.08); color:#0b3d91; font-size:0.82rem; font-weight:700; margin-bottom:0.75rem;">
                <span style="font-size:0.95rem; margin-right:0.35rem;">☎</span>
                Contact
            </div>

            <h1 style="font-size:2.05rem; line-height:1.12; margin:0 0 0.7rem; color:#071937;">
                Talk with our operations and customer teams.
            </h1>

            <p style="font-size:0.98rem; color:#4b5563; margin:0 0 1.1rem; max-width:30rem;">
                Use the details below as placeholders. Swap in your own hotlines, WhatsApp, and duty contacts. We keep responses quick for mission-critical travel.
            </p>

            <div style="display:flex; flex-wrap:wrap; gap:0.7rem;">
                <a href="mailto:support@habeshair.com" class="hb-btn hb-btn-primary">Email support</a>
                <a href="{{ route('book') }}" class="hb-btn hb-btn-outline" style="color:#0b3d91; border-color:#c7d7ff;">Open booking</a>
            </div>
        </div>

        <div style="flex:1 1 260px; min-width:240px;">
            <div style="background:#ffffff; border-radius:1.25rem; padding:1.05rem 1.15rem; box-shadow:0 18px 35px rgba(15,23,42,0.12); border:1px solid #e5e7eb; display:grid; gap:0.55rem;">
                <div>
                    <div style="font-size:0.82rem; color:#6b7280;">Email</div>
                    <div style="font-weight:700; color:#071937;">support@habeshair.com</div>
                </div>
                <div>
                    <div style="font-size:0.82rem; color:#6b7280;">Phone / WhatsApp</div>
                    <div style="font-weight:700; color:#071937;">+211-XXX-XXXXXX</div>
                </div>
                <div>
                    <div style="font-size:0.82rem; color:#6b7280;">Ops hours</div>
                    <div style="font-weight:700; color:#071937;">24/7 for charters & medevac</div>
                </div>
            </div>
        </div>
    </section>

    <section style="margin-top:2.6rem; display:grid; grid-template-columns:repeat(auto-fit,minmax(240px,1fr)); gap:1rem;">
        <article style="background:#ffffff; border:1px solid #e5e7eb; border-radius:1rem; padding:1rem 1.05rem; box-shadow:0 12px 25px rgba(15,23,42,0.06);">
            <h3 style="margin:0 0 0.35rem; font-size:1rem; color:#0b3d91;">Booking & charters</h3>
            <p style="margin:0; font-size:0.85rem; color:#4b5563;">Send sectors, dates, payload, and preferred timings. We’ll confirm availability and permits.</p>
            <a href="{{ route('book') }}" style="margin-top:0.5rem; display:inline-block; font-size:0.85rem; color:#0b3d91; font-weight:600;">Submit booking →</a>
        </article>
        <article style="background:#ffffff; border:1px solid #e5e7eb; border-radius:1rem; padding:1rem 1.05rem; box-shadow:0 12px 25px rgba(15,23,42,0.06);">
            <h3 style="margin:0 0 0.35rem; font-size:1rem; color:#0b3d91;">Customer support</h3>
            <p style="margin:0; font-size:0.85rem; color:#4b5563;">Rebooking, baggage, special assistance, and payment questions.</p>
            <a href="{{ route('help') }}" style="margin-top:0.5rem; display:inline-block; font-size:0.85rem; color:#0b3d91; font-weight:600;">Help center →</a>
        </article>
        <article style="background:#ffffff; border:1px solid #e5e7eb; border-radius:1rem; padding:1rem 1.05rem; box-shadow:0 12px 25px rgba(15,23,42,0.06);">
            <h3 style="margin:0 0 0.35rem; font-size:1rem; color:#0b3d91;">Partnerships</h3>
            <p style="margin:0; font-size:0.85rem; color:#4b5563;">Discuss contracts, basing, and joint routes with our leadership team.</p>
            <a href="{{ route('about') }}" style="margin-top:0.5rem; display:inline-block; font-size:0.85rem; color:#0b3d91; font-weight:600;">About us →</a>
        </article>
    </section>

    <section style="margin-top:2.6rem;">
        <div style="border-radius:1.3rem; padding:1.15rem 1.2rem; background:linear-gradient(140deg,#0b3d91,#1e3a8a); color:#e5e7ff; display:flex; flex-wrap:wrap; gap:1rem; align-items:center; justify-content:space-between;">
            <div>
                <div style="font-size:0.82rem; opacity:0.9; margin-bottom:0.25rem;">Need a quick call?</div>
                <h3 style="margin:0; font-size:1.18rem;">Share your best contact and time—we’ll reach out.</h3>
            </div>
            <div style="display:flex; flex-wrap:wrap; gap:0.6rem;">
                <a href="mailto:support@habeshair.com" class="hb-btn hb-btn-primary" style="background:#facc15; color:#1f2937;">Email now</a>
                <a href="{{ route('services.air-charter') }}" class="hb-btn hb-btn-outline" style="border-color:rgba(226,232,255,0.6);">See services</a>
            </div>
        </div>
    </section>
</div>
@endsection
