<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body {
            background: #f4f4f4;
            font-family: 'Georgia', serif;
        }
        .classic-container {
            background: #fff;
            max-width: 400px;
            margin: 60px auto 0 auto;
            padding: 32px 28px 18px 28px;
            border: 1px solid #bbb;
            border-radius: 7px;
            box-shadow: 0 2px 10px #ccc;
        }
        .classic-title {
            font-size: 2rem;
            margin-bottom: 20px;
            text-align: center;
            color: #444;
            font-family: 'Georgia', serif;
        }
        .classic-label {
            font-size: 1rem;
            color: #333;
            margin-bottom: 6px;
            display: block;
            font-family: 'Georgia', serif;
        }
        .classic-input {
            width: 100%;
            padding: 8px 10px;
            margin-bottom: 16px;
            border: 1px solid #aaa;
            border-radius: 4px;
            font-size: 1rem;
            background: #fafafa;
        }
        .classic-btn {
            width: 100%;
            padding: 10px;
            background: #333;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 1.1rem;
            font-family: 'Georgia', serif;
            cursor: pointer;
            margin-bottom: 12px;
        }
        .classic-btn:hover {
            background: #555;
        }
        .classic-footer {
            margin-top: 18px;
            text-align: center;
            color: #888;
            font-size: 0.95rem;
            font-family: 'Georgia', serif;
        }
        .classic-error {
            color: #a94442;
            background: #f2dede;
            border: 1px solid #ebccd1;
            padding: 8px 12px;
            border-radius: 4px;
            margin-bottom: 15px;
            font-size: 0.98rem;
        }
        .classic-links {
            text-align: center;
            margin-top: 10px;
        }
        .classic-links a {
            color: #333;
            text-decoration: underline;
            margin: 0 8px;
            font-size: 0.97rem;
        }
        .classic-links a:hover {
            color: #000;
        }
    </style>
</head>
<body>
    <div class="classic-container">
        <div class="classic-title">Register</div>
        @if ($errors->any())
            <div class="classic-error">
                <ul style="margin:0; padding-left:18px;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <label class="classic-label" for="name">Full Name</label>
            <input class="classic-input" type="text" id="name" name="name" value="{{ old('name') }}" required autofocus>
            <label class="classic-label" for="email">Email</label>
            <input class="classic-input" type="email" id="email" name="email" value="{{ old('email') }}" required>
            <label class="classic-label" for="phone">Phone</label>
            <input class="classic-input" type="tel" id="phone" name="phone" value="{{ old('phone') }}" required>
            <label class="classic-label" for="password">Password</label>
            <input class="classic-input" type="password" id="password" name="password" required>
            <label class="classic-label" for="password_confirmation">Confirm Password</label>
            <input class="classic-input" type="password" id="password_confirmation" name="password_confirmation" required>
            <button class="classic-btn" type="submit">Register</button>
        </form>
        <div class="classic-links">
            <a href="{{ route('login') }}">Already have an account? Login</a>
        </div>
        <div class="classic-footer">
            Developed by ADOH.NET  COPYRIGHT
        </div>
    </div>
</body>
</html>