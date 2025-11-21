<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>HabeshAir</title>
  <style>
    :root{--primary:#006994;--secondary:#228B22;--accent:#fff;--text:#111;--muted:#64748b;--border:#e5e7eb}
    *{box-sizing:border-box} body{margin:0;font:16px/1.5 system-ui,-apple-system,Segoe UI,Inter,Roboto,Arial;color:var(--text);background:#f7f7f8}
    .container{max-width:1200px;margin:0 auto;padding:24px}
    header,footer{background:#fff;border-bottom:1px solid var(--border)} footer{border-top:1px solid var(--border);border-bottom:none}
    .row{display:flex;align-items:center;justify-content:space-between;gap:16px;padding:12px 24px}
    .brand{display:flex;align-items:center;gap:12px}.logo{width:36px;height:36px;border-radius:8px;background:var(--primary);color:#fff;display:grid;place-items:center;font-weight:800}
    nav{display:flex;gap:16px;flex-wrap:wrap} nav a{color:#334155;text-decoration:none;font-weight:600}
    .cta{background:var(--secondary);color:#fff;border:none;padding:8px 14px;border-radius:999px;font-weight:700;cursor:pointer}
    .hero{background:linear-gradient(135deg,var(--primary),var(--secondary));color:#fff;border-radius:24px;padding:24px;box-shadow:0 10px 30px rgba(0,0,0,.15)}
    .grid{display:grid;gap:16px}
    @media(min-width:900px){.grid-2{grid-template-columns:1.3fr .7fr}.grid-3{grid-template-columns:repeat(3,1fr)}.grid-4{grid-template-columns:repeat(4,1fr)}.grid-2even{grid-template-columns:1fr 1fr}}
    .card{background:#fff;border:1px solid var(--border);border-radius:16px;padding:16px}
    .btn{background:var(--primary);color:#fff;border:none;padding:10px 12px;border-radius:10px;font-weight:700;cursor:pointer}
    label{display:grid;gap:6px;font-size:12px;color:#475569;font-weight:600}
    input,select{padding:10px 12px;border:1px solid var(--border);border-radius:10px;outline-color:var(--primary)}
    h1{margin:0 0 8px;font-size:36px;line-height:1.15;font-weight:800} h2{margin:8px 0 16px;font-size:24px;font-weight:800;color:var(--primary)}
    .muted{color:var(--muted)} .flight{display:flex;justify-content:space-between;align-items:center;background:#fff;border:1px solid var(--border);border-radius:12px;padding:12px 16px}
  </style>
</head>
<body>
<header>
  <div class="row">
    <div class="brand"><div class="logo">HA</div><div style="font-weight:700">HabeshAir</div></div>
    <nav>
      <a href="/">Home</a>
      <a href="#">Routes</a>
      <a href="#">Schedule</a>
      <a href="#">Book</a>
      <a href="/portal/dashboard">Manage</a>
      <a href="#">VIP Charter</a>
      <a href="#">Help</a>
    </nav>
    <a class="cta" href="#">Book Now</a>
  </div>
</header>

<main class="container">
  <section class="hero">
    <div class="grid grid-2">
      <div>
        <h1>Connecting Africa’s skies</h1>
        <p style="opacity:.9">Reliable commuter flights and VIP charters across South Sudan. Mid-tier comfort, on-time operations.</p>
        <div style="display:flex;gap:12px;margin-top:16px">
          <a class="btn" href="#">Search Flights</a>
          <a class="btn" style="background:#fff;color:var(--primary);border:2px solid #fff" href="#">VIP Charter</a>
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
</main>

<footer>
  <div class="row" style="justify-content:flex-start;color:#64748b">© {{ date('Y') }} HabeshAir. All rights reserved.</div>
</footer>
</body>
</html>
