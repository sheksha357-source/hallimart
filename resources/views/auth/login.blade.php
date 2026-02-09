<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
</head>
<body>

<div class="auth-container">
    <div class="auth-card">
        <h2 class="auth-title">Login</h2>

        @if(session('error'))
            <p class="auth-error">{{ session('error') }}</p>
        @endif

        <form method="POST" action="/login" class="auth-form">
            @csrf

            <div class="form-group">
                <input type="email" name="email" placeholder="Email" required>
            </div>

            <div class="form-group">
                <input type="password" name="password" placeholder="Password" required>
            </div>

            <button type="submit" class="btn-primary">Login</button>
        </form>

        <p class="auth-footer">
            Don’t have an account?
            <a href="/register">Create new account</a>
        </p>
    </div>
</div>

</body>
</html>
