@extends('layouts.public')

@section('content')
<h1>Schedule snapshot</h1>
<p>Times are shown in local time and refreshed weekly. We add buffer for weather and airfield flow so departures feel dependable.</p>

<div class="card" style="margin-top: 12px">
    <h3 style="margin-top:0">Core timetable</h3>
    <table>
        <tr><th>Route</th><th>Days</th><th>ETD</th><th>ETA</th></tr>
        <tr><td>Juba → Wau</td><td>Mon, Wed, Fri</td><td>08:30</td><td>09:30</td></tr>
        <tr><td>Juba → Malakal</td><td>Tue, Thu</td><td>10:00</td><td>12:00</td></tr>
        <tr><td>Juba → Rumbek</td><td>Sat</td><td>07:00</td><td>08:00</td></tr>
        <tr><td>Juba → Bor</td><td>Sun</td><td>13:30</td><td>14:30</td></tr>
    </table>
    <p style="margin-top:12px">Need a different departure? Private charters can leave whenever the airfield is open and weather is clear.</p>
    <a class="cta" href="/book">Ask for a custom slot</a>
</div>

<div class="grid grid-2" style="margin-top: 16px">
    <div class="card">
        <h3>Check-in guidance</h3>
        <ul class="list">
            <li>Arrive 60 minutes before departure for domestic routes.</li>
            <li>Bring a valid photo ID and any permits required for your cargo.</li>
            <li>We keep you updated via SMS or WhatsApp if weather shifts the timing.</li>
        </ul>
    </div>
    <div class="card">
        <h3>Need to reschedule?</h3>
        <p>Our agents can move you to the next available flight. Simply reply to your confirmation email or reach out on WhatsApp.</p>
        <a class="cta" style="background:#fff;color:var(--primary);box-shadow:none;border:1px solid var(--border)" href="{{ route('help') }}">Contact support</a>
    </div>
</div>
@endsection
