{{-- resources/views/client/dashboard.blade.php --}}
@extends('layouts.app')

@section('title', 'Client Dashboard')

@section('content')
<div class="hb-container">
    {{-- HEADER / OVERVIEW --}}
    <section style="display:flex; flex-wrap:wrap; gap:1.5rem; align-items:flex-start;">
        <div style="flex:1 1 320px; min-width:260px;">
            <div style="display:inline-flex; align-items:center; padding:0.3rem 0.8rem; border-radius:999px; background:rgba(14,116,144,0.08); color:#0b3d91; font-size:0.82rem; font-weight:700; margin-bottom:0.75rem;">
                <span style="font-size:0.95rem; margin-right:0.35rem;">▣</span>
                Client portal
            </div>

            <h1 style="font-size:2rem; line-height:1.12; margin:0 0 0.65rem; color:#071937;">Welcome back. Track quotes, send messages, and manage your profile.</h1>

            <p style="font-size:0.95rem; color:#4b5563; margin:0 0 1rem; max-width:32rem;">This is a placeholder dashboard. Wire it to your auth and APIs to show real client data.</p>

            <div style="display:flex; flex-wrap:wrap; gap:0.7rem;">
                <a href="{{ route('book') }}" class="hb-btn hb-btn-primary">Book a flight</a>
                <a href="{{ route('services.air-charter') }}" class="hb-btn hb-btn-outline" style="color:#0b3d91; border-color:#c7d7ff;">Request charter</a>
            </div>
        </div>

        <div style="flex:1 1 280px; min-width:260px; display:grid; gap:0.8rem;">
            @php
                $stats = [
                    ['label' => 'Open quotes', 'value' => '3', 'hint' => 'Awaiting action'],
                    ['label' => 'Confirmed flights', 'value' => '2', 'hint' => 'Next 30 days'],
                    ['label' => 'Loyalty points', 'value' => '1,240', 'hint' => 'Bronze tier'],
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

    {{-- QUOTES LIST --}}
    <section style="margin-top:2.2rem;">
        <div style="display:flex; justify-content:space-between; align-items:center; gap:1rem; margin-bottom:0.75rem;">
            <div>
                <h2 style="font-size:1.2rem; margin:0; color:#071937;">Your quotes</h2>
                <p style="margin:0; font-size:0.9rem; color:#4b5563;">Replace the sample data with actual user quotes.</p>
            </div>
            <a href="{{ route('book') }}" class="hb-btn hb-btn-primary">New quote</a>
        </div>

        @php
            $quotes = [
                ['id' => 'Q-1042', 'service' => 'Charter', 'route' => 'JUB → EBB', 'status' => 'Reviewing', 'updated' => '2h ago'],
                ['id' => 'Q-1038', 'service' => 'Cargo', 'route' => 'JUB → GOM', 'status' => 'Quoted', 'updated' => 'Yesterday'],
                ['id' => 'Q-1031', 'service' => 'MedEvac', 'route' => 'JUB → NBO', 'status' => 'Closed', 'updated' => '3 days ago'],
            ];
        @endphp

        <div style="background:#ffffff; border-radius:1rem; border:1px solid #e5e7eb; box-shadow:0 10px 22px rgba(15,23,42,0.08); overflow:hidden;">
            <div style="display:grid; grid-template-columns:1.2fr 1fr 1fr 1fr; padding:0.9rem 1rem; background:#f8fafc; color:#475569; font-size:0.9rem; font-weight:600;">
                <div>Quote</div>
                <div>Service</div>
                <div>Status</div>
                <div>Updated</div>
            </div>
            @foreach($quotes as $quote)
                <div style="display:grid; grid-template-columns:1.2fr 1fr 1fr 1fr; padding:0.95rem 1rem; border-top:1px solid #e5e7eb; align-items:center; font-size:0.95rem; color:#0f172a;">
                    <div>
                        <div style="font-weight:700;">{{ $quote['id'] }}</div>
                        <div style="font-size:0.85rem; color:#6b7280;">{{ $quote['route'] }}</div>
                    </div>
                    <div>{{ $quote['service'] }}</div>
                    <div>
                        <span style="padding:0.15rem 0.6rem; border-radius:999px; background:{{ $quote['status'] === 'Quoted' ? '#ecfdf3' : ($quote['status']==='Reviewing' ? '#fff7ed' : '#f8fafc') }}; color:{{ $quote['status'] === 'Quoted' ? '#15803d' : ($quote['status']==='Reviewing' ? '#9a3412' : '#0f172a') }}; font-size:0.83rem; font-weight:600;">{{ $quote['status'] }}</span>
                    </div>
                    <div style="color:#64748b; font-size:0.9rem;">{{ $quote['updated'] }}</div>
                </div>
            @endforeach
        </div>
    </section>

    {{-- MESSAGE ADMIN & PROFILE --}}
    <section style="margin-top:2.2rem; display:grid; grid-template-columns:repeat(auto-fit,minmax(280px,1fr)); gap:1rem;">
        <div style="background:#ffffff; border-radius:1rem; border:1px solid #e5e7eb; padding:1rem 1.1rem; box-shadow:0 10px 22px rgba(15,23,42,0.08);">
            <h3 style="margin:0 0 0.6rem; color:#071937;">Message admin</h3>
            <p style="margin:0 0 0.9rem; font-size:0.9rem; color:#4b5563;">Send a note to the ops desk. Hook this form to your support endpoint.</p>
            <form action="#" method="POST" style="display:grid; gap:0.7rem;">
                <input type="text" name="subject" placeholder="Subject" style="padding:0.55rem 0.65rem; border:1px solid #d1d5db; border-radius:0.75rem; font-size:0.95rem;">
                <textarea name="message" rows="4" placeholder="Message" style="padding:0.65rem 0.7rem; border:1px solid #d1d5db; border-radius:0.9rem; font-size:0.95rem;"></textarea>
                <button type="submit" class="hb-btn hb-btn-primary" style="justify-self:start;">Send message</button>
            </form>
        </div>

        <div style="background:#ffffff; border-radius:1rem; border:1px solid #e5e7eb; padding:1rem 1.1rem; box-shadow:0 10px 22px rgba(15,23,42,0.08);">
            <h3 style="margin:0 0 0.6rem; color:#071937;">Profile settings</h3>
            <p style="margin:0 0 0.9rem; font-size:0.9rem; color:#4b5563;">Stub settings form. Connect to your user profile update route.</p>
            <form action="#" method="POST" style="display:grid; gap:0.7rem;">
                <input type="text" name="name" placeholder="Full name" style="padding:0.55rem 0.65rem; border:1px solid #d1d5db; border-radius:0.75rem; font-size:0.95rem;">
                <input type="email" name="email" placeholder="Email" style="padding:0.55rem 0.65rem; border:1px solid #d1d5db; border-radius:0.75rem; font-size:0.95rem;">
                <input type="text" name="phone" placeholder="Phone" style="padding:0.55rem 0.65rem; border:1px solid #d1d5db; border-radius:0.75rem; font-size:0.95rem;">
                <button type="submit" class="hb-btn hb-btn-outline" style="color:#0b3d91; border-color:#c7d7ff; justify-self:start;">Save changes</button>
            </form>
        </div>
    </section>

    {{-- LOYALTY --}}
    <section style="margin-top:2.2rem;">
        <h2 style="font-size:1.2rem; margin:0 0 0.6rem; color:#071937;">Loyalty points & rewards</h2>
        <p style="margin:0 0 1rem; font-size:0.9rem; color:#4b5563;">Swap these placeholders with your loyalty program logic.</p>
        <div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(240px,1fr)); gap:1rem;">
            <article style="background:#ffffff; border:1px solid #e5e7eb; border-radius:1rem; padding:1rem 1.05rem; box-shadow:0 12px 25px rgba(15,23,42,0.06);">
                <div style="font-size:0.85rem; color:#6b7280;">Points balance</div>
                <div style="font-size:1.3rem; font-weight:700; color:#071937;">1,240 pts</div>
                <p style="margin:0; font-size:0.85rem; color:#4b5563;">Earn points on each completed sector.</p>
            </article>
            <article style="background:#ffffff; border:1px solid #e5e7eb; border-radius:1rem; padding:1rem 1.05rem; box-shadow:0 12px 25px rgba(15,23,42,0.06);">
                <div style="font-size:0.85rem; color:#6b7280;">Next reward</div>
                <div style="font-size:1.3rem; font-weight:700; color:#071937;">Upgrade voucher</div>
                <p style="margin:0; font-size:0.85rem; color:#4b5563;">Redeem after 1,500 pts. Define your own tiers.</p>
            </article>
            <article style="background:#ffffff; border:1px solid #e5e7eb; border-radius:1rem; padding:1rem 1.05rem; box-shadow:0 12px 25px rgba(15,23,42,0.06);">
                <div style="font-size:0.85rem; color:#6b7280;">Tier</div>
                <div style="font-size:1.3rem; font-weight:700; color:#071937;">Bronze</div>
                <p style="margin:0; font-size:0.85rem; color:#4b5563;">List perks like priority support or baggage allowance.</p>
            </article>
        </div>
    </section>
</div>
@endsection
