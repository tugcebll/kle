<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ürün Listesi</title>
</head>
<body>


    <h1>Ürün Listesi</h1>

    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    @forelse ($products as $product)
       <p> {{ $product->name }} - {{ $product->price }} TL</p>
       <a href="{{ route('products.show', $product->id) }}">Detayları Gör</a>

       <a href="{{ route('products.edit', $product->id) }}">Düzenle</a>
    @empty
        <p>Henüz ürün eklenmedi.</p>
    @endforelse
    

</body>
</html>