<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f5f5f5;
        }

        .container {
            max-width: 500px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }

        button:hover {
            background-color: #45a049;
        }

        .error {
            color: red;
            font-size: 14px;
            margin-top: 5px;
        }

        .success {
            color: green;
            background-color: #dff0d8;
            padding: 10px;
            border-radius: 4px;
            margin-bottom: 15px;
        }

        .register-link {
            text-align: center;
            margin-top: 15px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Login</h1>

        @if (session('success'))
        <div class="success">
            {{ session('success') }}
        </div>
        @endif

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li class="error">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form method="POST" action="/login">
            @csrf
            <div class="form-group">
                <label for="email">Email</label>
                <input id="email" name="email" type="email" value="{{ old('email') }}" placeholder="Enter your email" required>
                @error('email')
                <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input id="password" name="password" type="password" placeholder="Enter your password" required>
                @error('password')
                <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit">Login</button>
        </form>

        <div class="register-link">
            Don't have an account? <a href="/register">Register here</a>
        </div>
    </div>
</body>

</html>