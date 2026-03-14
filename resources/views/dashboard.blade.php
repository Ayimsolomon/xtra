<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logistics Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg: #e0e5ec;
            --light-shadow: #ffffff;
            --dark-shadow: #a3b1c6;
            --primary-text: #44475a;
            --accent: #3b5998;
        }

        body {
            background-color: var(--bg);
            font-family: 'Inter', sans-serif;
            color: var(--primary-text);
            margin: 0;
            padding-top: 100px; /* Space for fixed navbar */
        }

        /* --- Neumorphic Navbar --- */
        nav {
            position: fixed;
            top: 20px;
            left: 5%;
            right: 5%;
            height: 70px;
            background: var(--bg);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 30px;
            box-shadow: 6px 6px 12px var(--dark-shadow),
                        -6px -6px 12px var(--light-shadow);
            z-index: 1000;
        }

        .nav-left {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .logo-circle {
            width: 40px;
            height: 40px;
            border-radius: 10px;
            background: var(--bg);
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: inset 2px 2px 5px var(--dark-shadow),
                        inset -2px -2px 5px var(--light-shadow);
            font-weight: bold;
            color: var(--accent);
        }

        .company-name {
            font-weight: 700;
            font-size: 1.2rem;
            letter-spacing: -0.5px;
        }

        .nav-right {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .user-pill {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 5px 15px 5px 5px;
            border-radius: 50px;
            background: var(--bg);
            box-shadow: inset 2px 2px 5px var(--dark-shadow),
                        inset -2px -2px 5px var(--light-shadow);
        }

        .nav-avatar {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            object-fit: cover;
            box-shadow: 2px 2px 5px var(--dark-shadow);
        }

        .logout-link {
            text-decoration: none;
            color: #d9534f;
            font-size: 0.9rem;
            font-weight: 600;
            padding: 10px 18px;
            border-radius: 12px;
            background: var(--bg);
            box-shadow: 4px 4px 8px var(--dark-shadow),
                        -4px -4px 8px var(--light-shadow);
            transition: 0.2s;
            border: none;
            cursor: pointer;
        }

        .logout-link:active {
            box-shadow: inset 2px 2px 5px var(--dark-shadow),
                        inset -2px -2px 5px var(--light-shadow);
        }

        /* --- Main Content --- */
        .container {
            max-width: 1100px;
            margin: 0 auto;
            padding: 20px;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 30px;
            margin-top: 20px;
        }

        .neu-card {
            background: var(--bg);
            border-radius: 25px;
            padding: 40px 20px;
            text-align: center;
            box-shadow: 9px 9px 16px var(--dark-shadow),
                        -9px -9px 16px var(--light-shadow);
        }

        .count {
            font-size: 2.5rem;
            font-weight: 800;
            color: var(--accent);
            display: block;
            margin-bottom: 10px;
        }

        .label {
            font-weight: 600;
            color: #777;
            text-transform: uppercase;
            font-size: 0.8rem;
            letter-spacing: 1px;
        }

        .logo-circle {
    width: 50px;         /* Increased slightly for visibility */
    height: 50px;
    border-radius: 12px; /* Matches the Neumorphic look */
    background: var(--bg);
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;    /* Clips the image if it's too big */
    padding: 5px;        /* Adds a little breathing room around the logo */
      box-shadow: inset 2px 2px 5px var(--dark-shadow),
                        inset -2px -2px 5px var(--light-shadow);
}

.logo-circle img {
    max-width: 100%;
    max-height: 100%;
    object-fit: contain; /* Ensures the logo isn't stretched */
        background: var(--bg);
            box-shadow: 4px 4px 8px var(--dark-shadow),
                        -4px -4px 8px var(--light-shadow);
            transition: 0.2s;
            border: none;
            cursor: pointer;
}

.company-name {
    font-weight: 700;
    font-size: 1.2rem;
    letter-spacing: -0.5px;
    color: var(--primary-text);
}

.logo-circle img {
    opacity: 0.9;
    filter: grayscale(10%); /* Subtle professional touch */
}
    </style>
</head>
<body>

    <nav>
        <div class="nav-left">
            <div class="logo-circle"><img src="{{ asset('images/xhlogo.png') }}" alt="Company Logo"></div>
            <span class="company-name">XHLogistics</span>
        </div>

        <div class="nav-right">
            <div class="user-pill">
                @if($user->avatar)
                    <img src="{{ $user->avatar }}" class="nav-avatar" alt="User">
                @else
                    <img src="https://ui-avatars.com/api/?name={{ urlencode($user->name) }}&background=e0e5ec" class="nav-avatar" alt="User">
                @endif
                <span style="font-size: 0.85rem; font-weight: 600;">{{ $user->name }}</span>
            </div>

            <form action="{{ route('logout') }}" method="POST" style="margin: 0;">
                @csrf
                <button type="submit" class="logout-link">Logout</button>
            </form>
        </div>
    </nav>

    <div class="container">
        <h2 style="margin-bottom: 30px; font-weight: 700;">Dashboard Overview</h2>

        <main class="stats-grid">
            <div class="neu-card">
                <span class="count">12</span>
                <span class="label">Logistics Requests</span>
            </div>

            <div class="neu-card">
                <span class="count">05</span>
                <span class="label">Incoming Logistics</span>
            </div>

            <div class="neu-card">
                <span class="count">28</span>
                <span class="label">Delivery</span>
            </div>

            <div class="neu-card">
                <span class="count">03</span>
                <span class="label">Pending</span>
            </div>
        </main>
    </div>

</body>
</html>
