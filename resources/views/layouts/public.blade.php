<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HabeshAir</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #0d6efd;
            --primary-dark: #0b5ed7;
            --ink: #0f172a;
            --muted: #475569;
            --card: #ffffffcc;
            --border: #d8e5ff;
            --background: linear-gradient(180deg, #e8f2ff 0%, #f7fbff 60%, #ffffff 100%);
        }
        * { box-sizing: border-box; }
        body {
            margin: 0;
            font-family: 'Plus Jakarta Sans', system-ui, -apple-system, "Segoe UI", sans-serif;
            background: var(--background);
            color: var(--ink);
            min-height: 100vh;
            position: relative;
            overflow-x: hidden;
        }
        body::before, body::after {
            content: "";
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            width: 120%;
            height: 320px;
            background: radial-gradient(circle at 20% 40%, rgba(255,255,255,0.9) 0, rgba(255,255,255,0) 45%),
                        radial-gradient(circle at 70% 20%, rgba(255,255,255,0.8) 0, rgba(255,255,255,0) 40%),
                        radial-gradient(circle at 30% 80%, rgba(255,255,255,0.85) 0, rgba(255,255,255,0) 50%);
            z-index: 0;
        }
        body::after { top: 380px; opacity: 0.6; }
        body::before { top: 20px; opacity: 0.7; }
        .shell { position: relative; z-index: 1; }
        header {
            position: sticky;
            top: 0;
            z-index: 10;
            backdrop-filter: blur(12px);
            background: rgba(255, 255, 255, 0.85);
            border-bottom: 1px solid var(--border);
        }
        .topbar {
            max-width: 1200px;
            margin: 0 auto;
            padding: 14px 20px;
            display: flex;
            align-items: center;
            gap: 20px;
            justify-content: space-between;
        }
        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
            font-weight: 800;
            letter-spacing: -0.02em;
            color: var(--ink);
        }
        .brand-mark {
            width: 40px;
            height: 40px;
            border-radius: 12px;
            background: linear-gradient(135deg, var(--primary), #4aa3ff);
            color: #fff;
            display: grid;
            place-items: center;
            font-weight: 800;
            box-shadow: 0 10px 30px rgba(13, 110, 253, 0.25);
        }
        nav { display: flex; gap: 14px; flex-wrap: wrap; }
        nav a {
            text-decoration: none;
            color: var(--muted);
            font-weight: 600;
            padding: 8px 12px;
            border-radius: 12px;
            transition: color 150ms ease, background 150ms ease;
        }
        nav a:hover, nav a:focus {
            color: var(--ink);
            background: rgba(13, 110, 253, 0.08);
        }
        nav a.is-active {
            color: var(--ink);
            background: rgba(13, 110, 253, 0.12);
        }
        .cta {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 10px 14px;
            background: var(--primary);
            color: #fff;
            font-weight: 700;
            border-radius: 14px;
            text-decoration: none;
            box-shadow: 0 10px 25px rgba(13, 110, 253, 0.22);
            transition: transform 150ms ease, box-shadow 150ms ease, background 150ms ease;
        }
        .cta:hover { background: var(--primary-dark); transform: translateY(-1px); box-shadow: 0 12px 30px rgba(13, 110, 253, 0.28); }
        .container { max-width: 1200px; margin: 0 auto; padding: 28px 20px 60px; }
        h1 { margin: 0 0 10px; font-size: clamp(32px, 4vw, 46px); line-height: 1.1; }
        h2 { margin: 0 0 12px; font-size: clamp(24px, 3vw, 32px); }
        p { color: var(--muted); margin: 0 0 12px; }
        .pill { display: inline-flex; align-items: center; gap: 8px; padding: 8px 12px; background: rgba(13, 110, 253, 0.08); color: var(--primary); border-radius: 999px; font-weight: 700; }
        .hero { display: grid; gap: 22px; align-items: center; }
        @media (min-width: 900px) { .hero { grid-template-columns: 1.15fr 0.85fr; } }
        .card {
            background: var(--card);
            border: 1px solid var(--border);
            border-radius: 18px;
            padding: 18px;
            box-shadow: 0 20px 45px rgba(15, 23, 42, 0.06);
            backdrop-filter: blur(2px);
        }
        .card h3 { margin-top: 0; margin-bottom: 6px; }
        .grid { display: grid; gap: 16px; }
        .grid-3 { grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); }
        .grid-2 { grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); }
        .tag { color: var(--primary); font-weight: 700; }
        .list { list-style: none; padding: 0; margin: 0; display: grid; gap: 8px; }
        .list li { padding: 10px 12px; border: 1px solid var(--border); border-radius: 12px; background: #fff; }
        table { width: 100%; border-collapse: collapse; background: #fff; border-radius: 14px; overflow: hidden; box-shadow: 0 10px 30px rgba(15,23,42,0.05); }
        th, td { padding: 12px 14px; text-align: left; border-bottom: 1px solid var(--border); }
        th { background: rgba(13, 110, 253, 0.08); color: var(--ink); font-weight: 700; }
        tr:last-child td { border-bottom: none; }
        footer { border-top: 1px solid var(--border); background: rgba(255,255,255,0.82); }
        .foot { max-width: 1200px; margin: 0 auto; padding: 20px; color: var(--muted); }
        .link-row { display: flex; gap: 10px; flex-wrap: wrap; }
        .link-row a { text-decoration: none; color: var(--primary); font-weight: 700; }
    </style>
</head>
<body>
<div class="shell">
    <header>
        <div class="topbar">
            <div class="brand">
                <div class="brand-mark">HA</div>
                <div>HabeshAir</div>
            </div>
            <nav>
                <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'is-active' : '' }}">Home</a>
                <a href="{{ route('routes') }}" class="{{ request()->routeIs('routes') ? 'is-active' : '' }}">Routes</a>
                <a href="{{ route('schedule') }}" class="{{ request()->routeIs('schedule') ? 'is-active' : '' }}">Schedule</a>
                <a href="/book">Booking</a>
                <a href="{{ route('vip') }}">VIP Charter</a>
                <a href="{{ route('help') }}" class="{{ request()->routeIs('help') ? 'is-active' : '' }}">Help</a>
            </nav>
            <a class="cta" href="/dashboard">Customer portal</a>
        </div>
    </header>

    <main class="container">
        @yield('content')
    </main>

    <footer>
        <div class="foot">
            <div class="link-row">
                <a href="/book">Book a flight</a>
                <a href="{{ route('routes') }}">Routes</a>
                <a href="{{ route('schedule') }}">Schedule</a>
                <a href="{{ route('help') }}">Support</a>
            </div>
            <p>© {{ date('Y') }} HabeshAir. Crafted with care above the clouds.</p>
        </div>
    </footer>
</div>
</body>
</html>
