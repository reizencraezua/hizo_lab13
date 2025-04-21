<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel Auth')</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        .navbar {
            background-color: #333;
            color: white;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
        }

        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 0 20px;
        }

        .content {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
    @yield('styles')
</head>

<body>
    <nav class="navbar">
        <div class="logo">
            <a href="/">Laravel Auth</a>
        </div>
        <div class="nav-links">
            @guest
            <a href="/login">Login</a>
            <a href="/register">Register</a>
            @else
            <span>{{ auth()->user()->name }}</span>
            <form method="POST" action="/logout" style="display: inline;">
                @csrf
                <button type="submit" style="background: none; border: none; color: white; cursor: pointer;">Logout</button>
            </form>
            @endguest
        </div>
    </nav>

    <div class="container">
        <div class="content">
            @yield('content')
        </div>
    </div>

    @yield('scripts')
</body>

</html>