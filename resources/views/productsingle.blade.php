<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <div>
        <img src="\public\storage\{{ $product->picture }}" alt="{{ $product->slug }}">
        <br>
        <span>Название -  {{ $product->title }}</span>
        <br>
        <span>Артикул - {{ $product->vendor_code }}</span>
        <br>
        <span>Вес - {{ $product->weigth }}</span>
        <br>
        <span>Размер - {{ $product->size }}</span>
        <br>
        <span>Цена - {{ $product->price }}</span>
    </div>

</body>
</html>