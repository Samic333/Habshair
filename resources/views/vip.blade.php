@extends('layouts.site')

@section('content')
  <section class="hero">
    <div class="grid grid-2even">
      <div>
        <h1>VIP Charter</h1>
        <p style="opacity:.9">Private charters across South Sudan with Cessna 208 Caravan and Dornier 228 aircraft.</p>
        <ul class="muted" style="padding-left:18px;line-height:1.6">
          <li>Flexible departure times from Juba and regional hubs</li>
          <li>Dedicated ground handling and priority boarding</li>
          <li>Dynamic pricing based on routing and payload</li>
        </ul>
        <div style="margin-top:12px">
          <a class="btn" href="{{ route('book') }}">Request a charter</a>
          <a class="btn" style="background:#fff;color:var(--primary);border:2px solid #fff" href="mailto:support@habeshair.com">Talk to our team</a>
        </div>
      </div>
      <div class="card">
        <div style="font-weight:700;margin-bottom:8px">Popular VIP city pairs</div>
        <div class="grid" style="gap:10px">
          <div class="flight"><b>JUB → WUU</b><span class="muted">Same-day return</span></div>
          <div class="flight"><b>JUB → MAK</b><span class="muted">Direct</span></div>
          <div class="flight"><b>JUB → RBX</b><span class="muted">Morning departures</span></div>
          <div class="flight"><b>JUB → BOR</b><span class="muted">On-demand</span></div>
        </div>
      </div>
    </div>
  </section>
@endsection
