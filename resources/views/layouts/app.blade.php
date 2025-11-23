{{-- resources/views/layouts/app.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title', 'Habeshair Airlines')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- If you already have app.css, keep this --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <style>
        :root {
            --hb-blue: #0b3d91;
            --hb-sky: #1e90ff;
            --hb-light: #f5f7fb;
            --hb-dark: #071937;
            --hb-accent: #f0b429;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            background: #ffffff;
            color: #1b1b1b;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        header {
            position: sticky;
            top: 0;
            z-index: 40;
            background: rgba(7, 25, 55, 0.96);
            backdrop-filter: blur(12px);
        }

        .hb-nav {
            max-width: 1120px;
            margin: 0 auto;
            padding: 0.65rem 1.25rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 1rem;
        }

        .hb-logo {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: #fff;
            font-weight: 700;
            letter-spacing: 0.04em;
        }

        .hb-logo-badge {
            width: 32px;
            height: 32px;
            border-radius: 999px;
            background: linear-gradient(135deg, var(--hb-sky), var(--hb-blue));
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.95rem;
        }

        .hb-menu {
            display: flex;
            align-items: center;
            gap: 1.1rem;
            font-size: 0.9rem;
            color: #e2e8ff;
        }

        .hb-menu a {
            padding: 0.25rem 0.1rem;
            border-radius: 999px;
            transition: color 0.15s ease, background-color 0.15s ease;
        }

        .hb-menu a:hover {
            background: rgba(255, 255, 255, 0.06);
            color: #ffffff;
        }

        .hb-menu-cta {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .hb-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0.45rem 1rem;
            border-radius: 999px;
            border: 1px solid transparent;
            font-size: 0.85rem;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.15s ease, color 0.15s ease, transform 0.1s ease, box-shadow 0.1s ease;
            white-space: nowrap;
        }

        .hb-btn-primary {
            background: linear-gradient(135deg, var(--hb-sky), var(--hb-blue));
            color: #ffffff;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.18);
        }

        .hb-btn-primary:hover {
            transform: translateY(-1px);
            box-shadow: 0 10px 18px rgba(0, 0, 0, 0.22);
        }

        .hb-btn-outline {
            background: transparent;
            color: #e2e8ff;
            border-color: rgba(226, 232, 255, 0.5);
        }

        .hb-btn-outline:hover {
            background: rgba(255, 255, 255, 0.08);
        }

        main {
            min-height: 70vh;
            background: radial-gradient(circle at top left, #e5f2ff 0, #ffffff 46%, #f5f7fb 100%);
        }

        .hb-container {
            max-width: 1120px;
            margin: 0 auto;
            padding: 2.5rem 1.25rem 3.5rem;
        }

        footer {
            background: var(--hb-dark);
            color: #d1d5f0;
            padding: 1.75rem 1.25rem;
        }

        .hb-footer-inner {
            max-width: 1120px;
            margin: 0 auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 1.5rem;
            font-size: 0.85rem;
        }

        .hb-footer-links {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
        }

        .hb-footer-links a {
            color: #cbd5ff;
        }

        @media (max-width: 768px) {
            .hb-menu {
                display: none; /* simple for now; later you can add mobile menu */
            }
        }
    </style>

    @stack('head')
</head>
<body>
<header>
    <nav class="hb-nav">
        <a href="{{ route('home') }}" class="hb-logo">
            <div class="hb-logo-badge">✈︎</div>
            <span>HABESHAIR</span>
        </a>

        <div class="hb-menu">
            <a href="{{ route('routes') }}">Routes</a>
            <a href="{{ route('services.air-charter') }}">Air Charter</a>
            <a href="{{ route('services.cargo') }}">Cargo</a>
            <a href="{{ route('services.medevac') }}">MedEvac</a>
            <a href="{{ route('fleet') }}">Fleet</a>
            <a href="{{ route('about') }}">About</a>
            <a href="{{ route('contact') }}">Contact</a>
            <a href="{{ route('help') }}">Help</a>

            <div class="hb-menu-cta">
                <a href="{{ route('book') }}" class="hb-btn hb-btn-primary">Book a Flight</a>
                <a href="{{ route('vip') }}" class="hb-btn hb-btn-outline">VIP Charter</a>

                @auth
                    <a href="{{ route('dashboard') }}" class="hb-btn hb-btn-outline">Dashboard</a>
                @endauth

                @guest
                    <a href="{{ route('login') }}" class="hb-btn hb-btn-outline">Log in</a>
                    <a href="{{ route('register') }}" class="hb-btn hb-btn-outline">Sign up</a>
                @endguest
            </div>
        </div>
    </nav>
</header>

<main>
    @yield('content')
</main>

<footer>
    <div class="hb-footer-inner">
        <div>
            <strong>Habeshair Airlines</strong><br>
            Connecting East Africa with safe, reliable regional flights.
        </div>
        <div class="hb-footer-links">
            <a href="{{ route('help') }}">Customer support</a>
            <a href="{{ route('routes') }}">Route map</a>
            <a href="{{ route('fleet') }}">Fleet</a>
            <a href="{{ route('about') }}">About</a>
            <a href="{{ route('vip') }}">VIP services</a>
            <a href="{{ route('book') }}">Book now</a>
        </div>
        <div>
            &copy; {{ date('Y') }} Habeshair. All rights reserved.
        </div>
    </div>
</footer>

@stack('scripts')
</body>
</html>
