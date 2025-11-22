@extends('layouts.site')

@section('content')
  <section class="hero">
    <div class="grid grid-2even">
      <div>
        <h1>Book your flight</h1>
        <p style="opacity:.9">Tell us where you’d like to go and we’ll confirm the next available commuter flight.</p>
        <p class="muted">Booking form coming soon. In the meantime, contact support for immediate travel.</p>
        <div style="margin-top:12px">
          <a class="btn" href="mailto:support@habeshair.com">Email support</a>
          <a class="btn" style="background:#fff;color:var(--primary);border:2px solid #fff" href="tel:+211000000000">Call us</a>
        </div>
      </div>
      <div class="card">
        <div class="grid" style="gap:10px">
          <label>Origin<input placeholder="JUB - Juba"></label>
          <label>Destination<input placeholder="WUU - Wau"></label>
          <label>Date<input placeholder="YYYY-MM-DD"></label>
          <label>Passengers<input type="number" min="1" value="1"></label>
          <button class="btn" disabled>Booking form coming soon</button>
        </div>
      </div>
    </div>
  </section>
@endsection
