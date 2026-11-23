<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ürün Ekle</title>
</head>
<body>
    <h1>Yeni Ürün Ekle</h1>

    <form action="{{ route('products.store')}}" method="POST">

        @csrf
        <label for="name">Ürün Adı:</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}"> <br>

        <label for="price">Fiyat:</label>
        <input type="number" id="price" name="price" value="{{ old('price') }}" step="0.01"> <br>

        <label for="description">Açıklama:</label> <br>
        <textarea id="description" name="description">{{ old('description') }}</textarea> <br>
        
        <button type="submit">Ürün Ekle</button>

    </form>
    
</body>
</html>