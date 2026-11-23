<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ürün Detayı</title>
</head>
<body>
    <h1>Ürün Detayı</h1>

    <h2>{{ $product->name}}</h2>

    <p>Fiyat: {{ $product->price }} TL</p>

    <p>Açıklama: {{ $product->description }}</p>

    <a href="{{ route('products.index') }}">Ürün Listesine Dön</a>
    
</body>
</html>