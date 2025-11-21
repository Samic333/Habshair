@extends('layouts.public')

@section('content')
<section class="hero">
    <div class="grid" style="gap: 12px">
        <span class="pill">Blue skies ahead</span>
        <h1>HabeshAir keeps South Sudan connected with calm, cloud-soft service.</h1>
        <p>Plan your commuter trip or request a VIP charter with a modern, sky-blue interface. Clear routes, honest timetables, and a support team that answers fast.</p>
        <div class="grid" style="gap: 10px; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); max-width: 520px;">
            <a class="cta" href="/book">Start a booking</a>
            <a class="cta" style="background:#fff;color:var(--primary);box-shadow:none;border:1px solid var(--border)" href="{{ route('routes') }}">View our network</a>
        </div>
        <div class="grid grid-3" style="margin-top: 10px">
            <div class="card">
                <div class="tag">City hops</div>
                <p>Daily commuter flights linking Juba to Wau, Malakal, Rumbek, and Bor.</p>
            </div>
            <div class="card">
                <div class="tag">VIP comfort</div>
                <p>Private charters with flexible timing and dedicated concierge follow-up.</p>
            </div>
            <div class="card">
                <div class="tag">Real humans</div>
                <p>Friendly support via phone, WhatsApp, or email whenever you need guidance.</p>
            </div>
        </div>
    </div>
    <div class="card">
        <h3 style="margin-top:0">Quick trip planner</h3>
        <p style="margin-top:-4px">Share a few details and our team will confirm options.</p>
        <div class="grid" style="gap: 10px">
            <label class="tag">From
                <input style="width:100%;margin-top:6px" placeholder="e.g. JUB - Juba" aria-label="Origin">
            </label>
            <label class="tag">To
                <input style="width:100%;margin-top:6px" placeholder="e.g. WUU - Wau" aria-label="Destination">
            </label>
            <label class="tag">Preferred date
                <input type="date" style="width:100%;margin-top:6px" aria-label="Date">
            </label>
            <label class="tag">Trip type
                <select style="width:100%;margin-top:6px" aria-label="Trip type">
                    <option>One-way</option>
                    <option>Return</option>
                    <option>Private charter</option>
                </select>
            </label>
            <a class="cta" style="justify-content:center" href="/book">Send my request</a>
            <p style="margin:0;color:var(--muted);font-size:14px">No payment needed to start. We confirm within a few minutes during operating hours.</p>
        </div>
    </div>
</section>

<section style="margin-top: 32px">
    <h2>Explore the site</h2>
    <div class="grid grid-3">
        <div class="card">
            <div class="tag">Routes & cities</div>
            <p>See every airport we currently serve plus upcoming launches.</p>
            <a class="cta" style="background:#fff;color:var(--primary);box-shadow:none;border:1px solid var(--border)" href="{{ route('routes') }}">Open routes page</a>
        </div>
        <div class="card">
            <div class="tag">Schedule</div>
            <p>Week-by-week timings so you can pick the exact departure you want.</p>
            <a class="cta" style="background:#fff;color:var(--primary);box-shadow:none;border:1px solid var(--border)" href="{{ route('schedule') }}">View timetable</a>
        </div>
        <div class="card">
            <div class="tag">Help desk</div>
            <p>Contact our agents, download policies, and review baggage guidance.</p>
            <a class="cta" style="background:#fff;color:var(--primary);box-shadow:none;border:1px solid var(--border)" href="{{ route('help') }}">Get support</a>
        </div>
    </div>
</section>

<section style="margin-top: 32px" class="grid grid-2">
    <div class="card">
        <h3>Why travelers choose HabeshAir</h3>
        <ul class="list">
            <li><strong>Reliable timing.</strong> Morning departures that keep you productive.</li>
            <li><strong>Comfortable cabins.</strong> Clean seats, cool air, and friendly hosts.</li>
            <li><strong>Transparent prices.</strong> Clear quotes for both commuter and charter requests.</li>
            <li><strong>Secure payments.</strong> Bank transfer and mobile money options available.</li>
        </ul>
    </div>
    <div class="card">
        <h3>Need something special?</h3>
        <p>Our VIP desk can arrange private cabins, custom catering, and tarmac-side transfers. Tell us your preferred times and we will tailor the experience.</p>
        <div class="grid" style="grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); gap: 10px;">
            <a class="cta" href="{{ route('vip') }}">Request VIP charter</a>
            <a class="cta" style="background:#fff;color:var(--primary);box-shadow:none;border:1px solid var(--border)" href="/book">Plan a commuter trip</a>
        </div>
    </div>
</section>
@endsection
