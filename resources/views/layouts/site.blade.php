<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>HabeshAir</title>
  <style>
    :root{--primary:#006994;--secondary:#228B22;--accent:#fff;--text:#111;--muted:#64748b;--border:#e5e7eb}
    *{box-sizing:border-box}
    body{margin:0;font:16px/1.5 system-ui,-apple-system,Segoe UI,Inter,Roboto,Arial;color:var(--text);background:#f7f7f8}
    .container{max-width:1200px;margin:0 auto;padding:24px}
    header,footer{background:#fff;border-bottom:1px solid var(--border)} footer{border-top:1px solid var(--border);border-bottom:none}
    .row{display:flex;align-items:center;justify-content:space-between;gap:16px;padding:12px 24px}
    .brand{display:flex;align-items:center;gap:12px}
    .logo{width:36px;height:36px;border-radius:8px;background:var(--primary);color:#fff;display:grid;place-items:center;font-weight:800}
    nav{display:flex;gap:16px;flex-wrap:wrap}
    nav a{color:#334155;text-decoration:none;font-weight:600}
    .cta{background:var(--secondary);color:#fff;border:none;padding:8px 14px;border-radius:999px;font-weight:700;cursor:pointer;text-decoration:none;display:inline-block}
    .hero{background:linear-gradient(135deg,var(--primary),var(--secondary));color:#fff;border-radius:24px;padding:24px;box-shadow:0 10px 30px rgba(0,0,0,.15)}
    .grid{display:grid;gap:16px}
    @media(min-width:900px){.grid-2{grid-template-columns:1.3fr .7fr}.grid-3{grid-template-columns:repeat(3,1fr)}.grid-4{grid-template-columns:repeat(4,1fr)}.grid-2even{grid-template-columns:1fr 1fr}}
    .card{background:#fff;border:1px solid var(--border);border-radius:16px;padding:16px}
    .btn{background:var(--primary);color:#fff;border:none;padding:10px 12px;border-radius:10px;font-weight:700;cursor:pointer;text-decoration:none;display:inline-block}
    label{display:grid;gap:6px;font-size:12px;color:#475569;font-weight:600}
    input,select{padding:10px 12px;border:1px solid var(--border);border-radius:10px;outline-color:var(--primary)}
    h1{margin:0 0 8px;font-size:36px;line-height:1.15;font-weight:800}
    h2{margin:8px 0 16px;font-size:24px;font-weight:800;color:var(--primary)}
    .muted{color:var(--muted)}
    .flight{display:flex;justify-content:space-between;align-items:center;background:#fff;border:1px solid var(--border);border-radius:12px;padding:12px 16px}
  </style>
</head>
<body>
<header>
  <div class="row">
    <div class="brand"><div class="logo">HA</div><div style="font-weight:700">HabeshAir</div></div>
    <nav>
      <a href="{{ route('home') }}">Home</a>
      <a href="{{ route('routes') }}">Routes</a>
      <a href="{{ route('schedule') }}">Schedule</a>
      <a href="{{ route('book') }}">Book</a>
      <a href="{{ route('dashboard') }}">Customer portal</a>
      <a href="{{ route('vip') }}">VIP Charter</a>
      <a href="{{ route('help') }}">Help</a>
    </nav>
    <a class="cta" href="{{ route('book') }}">Book Now</a>
  </div>
</header>

<main class="container">
  @yield('content')
</main>

<footer>
  <div class="row" style="justify-content:flex-start;color:#64748b">© {{ date('Y') }} HabeshAir. All rights reserved.</div>
</footer>
</body>
</html>
