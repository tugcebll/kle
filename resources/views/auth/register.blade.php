<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kayıt Ol - KLE</title>
</head>
<body>

    <h1>Kayıt Ol</h1>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <form action="{{ route('register.store') }}" method="POST">
        @csrf

        <div>
            <label for="full_name">Ad Soyad:</label>
            <input type="text" id="full_name" name="full_name" 
                value="{{ old('full_name') }}" required>
        </div>

        <div>
            <label for="email">E-posta:</label>

            <input type="email" id="email" name="email"
                value="{{ old('email') }}" required>

            @error('email')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="password">Şifre:</label>
            <input type="password" id="password" name="password" required>
        
            @error('password')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="password_confirmation">Şifre Tekrarı:</label>
            <input type="password" id="password_confirmation"
                name="password_confirmation" required>

            @error('password_confirmation')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <button type="submit">Kayıt Ol</button>
    </form>
    
</body>
</html>