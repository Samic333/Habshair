@extends('layouts.public')

@section('content')
<h1>Help & support</h1>
<p>Questions about baggage, payments, or special assistance? Our team is ready to help and keep your trip smooth.</p>

<div class="grid grid-2" style="margin-top: 18px">
    <div class="card">
        <h3>Talk with us</h3>
        <ul class="list">
            <li><strong>Email:</strong> support@habeshair.com</li>
            <li><strong>Phone/WhatsApp:</strong> +211-XXX-XXXXXX</li>
            <li><strong>Desk hours:</strong> 07:00 – 19:00 local time, Monday to Saturday</li>
        </ul>
        <a class="cta" style="margin-top:10px" href="/book">Open booking form</a>
    </div>
    <div class="card">
        <h3>Guides</h3>
        <ul class="list">
            <li>Carry-on: 7kg small bag; checked baggage varies by route and aircraft type.</li>
            <li>Payments: bank transfer, mobile money, or pay-on-arrival for selected routes.</li>
            <li>Charters: tell us your route and times and we will confirm availability fast.</li>
        </ul>
    </div>
</div>

<div class="card" style="margin-top: 18px">
    <h3>Still feeling cloudy?</h3>
    <p>Send a quick message with your origin, destination, date, and number of passengers. We will respond with schedule options, charter choices, and payment steps.</p>
    <div class="grid" style="grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 10px; margin-top: 10px;">
        <a class="cta" href="mailto:support@habeshair.com">Email support</a>
        <a class="cta" style="background:#fff;color:var(--primary);box-shadow:none;border:1px solid var(--border)" href="tel:+211XXXXXXX">Call us</a>
    </div>
</div>
@endsection
