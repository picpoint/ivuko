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
                    <span>Вставка: <b>{{ $product->stone->title }}</b></span>
                    <span>Вес: <b>{{ $product->weight }}</b></span>
                    <span>Размер:
                            @if(empty($product->size))
                                <i><u>Нет размера</u></i>
                            @else
                                <b>{{ $product->size }}</b>
                            @endif
                    </span>
                    <span>Цена: <b>{{ $product->price }} р.</b></span>
                </div>
            </div>

            <div class="productsingle__footer">
                @include('footer.footer')
            </div>

        </div>
    </section>

</body>
</html>