<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 40px 20px;
            background-color: #eef1f4;
            color: #333;
        }

        .container {
            max-width: 700px;
            margin: auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.05);
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #ddd;
            padding-bottom: 15px;
            margin-bottom: 25px;
        }

        h1 {
            font-size: 28px;
            color: #222;
            margin: 0;
        }

        form button {
            background-color: #ff4d4d;
            color: #fff;
            padding: 8px 16px;
            font-size: 14px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: background 0.2s ease;
        }

        form button:hover {
            background-color: #e03b3b;
        }

        .user-info {
            background-color: #f7f9fb;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 30px;
        }

        .user-info h2 {
            margin-top: 0;
            font-size: 20px;
            color: #444;
        }

        .user-info p {
            margin: 6px 0;
            font-size: 15px;
        }

        .content h2 {
            font-size: 20px;
            margin-top: 0;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Dashboard</h1>
            <form method="POST" action="/logout">
                @csrf
                <button type="submit">Logout</button>
            </form>
        </div>

        <div class="user-info">
            <h2>User Information</h2>
            <p><strong>Name:</strong> {{ auth()->user()->name }}</p>
            <p><strong>Email:</strong> {{ auth()->user()->email }}</p>
            <p><strong>Joined:</strong> {{ auth()->user()->created_at->format('F j, Y') }}</p>
        </div>

        <div class="content">
            <h2>Welcome to Your Dashboard</h2>
        </div>
    </div>
</body>

</html>