@extends('layouts.site')

@section('content')
  <section class="hero">
    <div class="grid grid-2">
      <div>
        <h1>Connecting Africa’s skies</h1>
        <p style="opacity:.9">Reliable commuter flights and VIP charters across South Sudan. Mid-tier comfort, on-time operations.</p>
        <div style="display:flex;gap:12px;margin-top:16px">
          <a class="btn" href="{{ route('book') }}">Search Flights</a>
          <a class="btn" style="background:#fff;color:var(--primary);border:2px solid #fff" href="{{ route('vip') }}">VIP Charter</a>
        </div>
      </div>
      <div class="card">
        <div class="grid" style="gap:8px">
          <label>Origin<input placeholder="JUB - Juba"></label>
          <label>Destination<input placeholder="WUU - Wau"></label>
          <label>Date<input placeholder="2025-08-30"></label>
          <button class="btn">Find flights</button>
        </div>
      </div>
    </div>
  </section>

  <div class="grid grid-3" style="margin-top:24px">
    <div class="card"><div style="font-weight:700;margin-bottom:6px">Domestic Routes</div><div class="muted">Juba ↔ Wau, Malakal, Rumbek, Bor, Yambio</div></div>
    <div class="card"><div style="font-weight:700;margin-bottom:6px">VIP Charter</div><div class="muted">Cessna 208 Caravan & Dornier 228 with dynamic pricing</div></div>
    <div class="card"><div style="font-weight:700;margin-bottom:6px">Secure Payments</div><div class="muted">M-Pesa or Bank Transfer with email confirmations</div></div>
  </div>

  <h2>Popular Flights</h2>
  <div class="grid grid-4">
    <div class="flight"><b>JUB → WUU</b><span class="muted">08:30 → 09:30</span></div>
    <div class="flight"><b>JUB → MAK</b><span class="muted">10:00 → 12:00</span></div>
    <div class="flight"><b>JUB → RBX</b><span class="muted">07:00 → 08:00</span></div>
    <div class="flight"><b>JUB → BOR</b><span class="muted">13:30 → 14:30</span></div>
  </div>
@endsection
