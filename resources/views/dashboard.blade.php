<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f5f5f5;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            border-bottom: 1px solid #eee;
            padding-bottom: 10px;
        }

        h1 {
            color: #333;
            margin: 0;
        }

        .user-info {
            margin-bottom: 20px;
            padding: 15px;
            background-color: #f9f9f9;
            border-radius: 5px;
        }

        .user-info p {
            margin: 5px 0;
        }

        button {
            background-color: #dc3545;
            color: white;
            padding: 8px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #c82333;
        }

        .content {
            padding: 20px 0;
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
            <p>This is a protected area that can only be accessed by authenticated users.</p>
            <p>Feel free to customize this page with your application-specific content.</p>
        </div>
    </div>
</body>

</html>