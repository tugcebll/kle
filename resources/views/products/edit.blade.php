<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ürün Düzenle</title>
</head>
<body>

    <h1>Ürün Düzenle </h1>

    <form action="{{ route('products.update', $product->id) }}" method="POST">
        

        @csrf
        @method('PUT')

        <label for="name">Ürün Adı:</label>
        <input type="text" name="name" id="name" value="{{ old('name', $product->name) }}">

        <label for="price">Fiyat:</label>
        <input type="number" name="price" id="price" step="0.01" value="{{ old('price', $product->price) }}">

        <label for="description">Açıklama:</label>
        <textarea name="description" id="description">{{ old('description', $product->description) }}</textarea>

        <button type="submit">Güncelle</button>

    </form>

    <a href="{{ route('products.index') }}">Ürün Listesine Geri Dön</a>

</body>
</html>