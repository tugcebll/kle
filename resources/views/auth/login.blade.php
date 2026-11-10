<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Yap - KLE</title>
</head>
<body>

    <h1>Giriş Yap</h1>

    <form method="POST" action="{{ route('login.store') }}">
        @csrf

        <div>
            <label for="email">E-posta:</label>
            <input type="email" id="email" name="email"
                value="{{ old('email') }}" required>

            @error('email')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="password">Şifre:</label>
            <input type="password" id="password" name="password" required>
            @error('password')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <button type="submit">Giriş Yap</button>
    </form>
 
    
</body>
</html>