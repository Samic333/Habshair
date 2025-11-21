@extends('layouts.public')

@section('content')
<h1>Our routes</h1>
<p>We focus on reliable commuter hops across South Sudan with aircraft that handle short runways and quick turnarounds.</p>

<div class="grid grid-2" style="margin-top: 18px">
    <div class="card">
        <h3>Current city pairs</h3>
        <ul class="list">
            <li>Juba (JUB) ↔ Wau (WUU)</li>
            <li>Juba (JUB) ↔ Malakal (MAK)</li>
            <li>Juba (JUB) ↔ Rumbek (RBX)</li>
            <li>Juba (JUB) ↔ Bor (BOR)</li>
            <li>Juba (JUB) ↔ Yambio (SSD)</li>
        </ul>
        <p style="margin-top:12px">Looking for a different destination? Our charter desk can position aircraft to most paved airfields in the region.</p>
        <a class="cta" href="/book">Request another route</a>
    </div>
    <div class="card">
        <h3>What to expect</h3>
        <ul class="list">
            <li><strong>Community schedule.</strong> We publish weekly timetables with realistic buffers.</li>
            <li><strong>Smart loads.</strong> We balance passenger and cargo weight to keep everyone on time.</li>
            <li><strong>Transparent pricing.</strong> Taxes and fees are included in the quotes we share.</li>
            <li><strong>Local expertise.</strong> Our crews know the airfields, weather patterns, and alternates.</li>
        </ul>
    </div>
</div>

<div class="card" style="margin-top: 18px">
    <h3>Route map snapshot</h3>
    <p>Most flights radiate from Juba, with onward options to humanitarian hubs and regional capitals. Use the booking form to connect the dots you need.</p>
    <div class="grid grid-3" style="margin-top: 12px">
        <div>
            <div class="tag">Western Corridor</div>
            <p>Wau and Yambio links for NGOs, traders, and family visits.</p>
        </div>
        <div>
            <div class="tag">Nile Axis</div>
            <p>Malakal and Bor routes for medical, government, and relief travel.</p>
        </div>
        <div>
            <div class="tag">Custom hops</div>
            <p>Private charters to mining sites, border towns, or relief bases.</p>
        </div>
    </div>
</div>
@endsection
