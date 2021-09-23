<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="robots" content="index, follow">
    <meta name="keywords" content="Кольца, серьги, пирсинг, золото, серебро, свадьба, день рождения, шеф, бриллианты, эксклюзив">
    <meta name="description" content="Официальный сайт Ивановской ювелирной компании. На нашем сайте вы найдёте ювелирные изделия. Выбирайте подарки себе и вашим близким в наших магазинах. Самовывоз из салонов в Екатеринбурге и Краснодаре.">
    <link rel="stylesheet" href="/public/assets/userssources/css/style.css">
</head>
<body>


    <section class="productsingle">
        <div class="productsingle__wrapper">
            @include('navbar.navbar')

            <div class="productsingle__product">
                <div class="productsingle__pictblock">
                    <img src="\public\storage\{{ $product->picture }}" alt="{{ $product->slug }}">
                </div>
                <div class="productsingle__describe">
                    <h3>{{ $product->title }}</h3>
                    <span>Артикул изделия: <b>{{ $product->vendor_code }}</b></span>
                    <span>Категория: <b>{{ $product->category->title }}</b></span>
                    <span>Материал: <b>{{ $product->material->title }}</b></span>
                </div>
            </div>

        </div>
    </section>


    {{--<div>--}}
        {{--<img style="width: 500px; height: 500px" src="\public\storage\{{ $product->picture }}" alt="{{ $product->slug }}">--}}
        {{--<br>--}}
        {{--<span>Название -  {{ $product->title }}</span>--}}
        {{--<br>--}}
        {{--<span>Категория -  {{ $product->category_id }}</span>--}}
        {{--<br>--}}
        {{--<span>Артикул - {{ $product->vendor_code }}</span>--}}
        {{--<br>--}}
        {{--<span>Материал - {{ $product->material }}</span>--}}
        {{--<br>--}}
        {{--<span>Вставка - {{ $product->stone }}</span>--}}
        {{--<br>--}}
        {{--<span>Вес - {{ $product->weight}}</span>--}}
        {{--<br>--}}
        {{--<span>Размер - {{ $product->size }}</span>--}}
        {{--<br>--}}
        {{--<span>Цена - {{ $product->price }}</span>--}}
    {{--</div>--}}

</body>
</html>