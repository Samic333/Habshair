@extends('layouts.site')

@section('content')
  <section class="hero">
    <div class="grid grid-2even">
      <div>
        <h1>Customer portal</h1>
        <p style="opacity:.9">A centralized place to manage your trips, payments, and passenger details.</p>
        <p class="muted">Customer portal coming soon; you’ll be able to view your trips here.</p>
        <div style="margin-top:12px">
          <a class="btn" href="{{ route('book') }}">Book a flight</a>
          <a class="btn" style="background:#fff;color:var(--primary);border:2px solid #fff" href="{{ route('vip') }}">VIP charter</a>
        </div>
      </div>
      <div class="card">
        <div style="font-weight:700;margin-bottom:8px">What you’ll find here</div>
        <ul class="muted" style="line-height:1.6;padding-left:18px;margin:0">
          <li>Upcoming and past trips</li>
          <li>Passenger manifests</li>
          <li>Payment receipts</li>
          <li>Support and change requests</li>
        </ul>
      </div>
    </div>
  </section>
@endsection
