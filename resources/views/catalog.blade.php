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
    <link rel="stylesheet" href="public/assets/userssources/css/style.css">
</head>
<body>


    <section class="catalog">
        <div class="catalog__wrapper">
            @include('navbar.navbar')

            <div class="catalog__describe">
                <span>Полный каталог украшений</span>
            </div>

            <div class="catalog__catalogblock">
                <div class="catalog__catalogwrapper">
                    <div class="catalog__catalogfilter">
                        <div class="catalog__filterdefault">
                            <span>Фильтры</span>
                            <a href="#">Сбросить</a>
                        </div>

                        <div class="catalog__separate"></div>

                        <form action="#" method="post" name="formfilter" class="catalog__formfilter">
                        {{--<form action="{{ route('categories.update', ['category' => $category->id]) }}" method="post">--}}
                            @csrf
                            <div class="catalog__filtercategory">
                                <span>Категория украшений</span>

                                @foreach($categories as $category)
                                    <div class="catalog__onegoods">
                                        <input type="checkbox" name="{{ $category->slug }}" id="{{ $category->slug }}" value="{{ $category->id }}">
                                        <label for="{{ $category->slug }}">{{ $category->title }}</label>
                                    </div>
                                @endforeach

                            </div>

                            <div class="catalog__separate"></div>

                            <div class="catalog__filtermaterial">
                                <span>Материал</span>

                                @foreach($materials as $material)
                                    <div class="catalog__onegoods">
                                        <input type="checkbox" name="{{ $material->slug }}" id="{{ $material->slug }}" value="{{ $material->id }}">
                                        <label for="{{ $material->slug }}">{{ $material->title }}</label>
                                    </div>
                                @endforeach

                            </div>

                            <div class="catalog__separate"></div>

                            <div class="catalog__filterstones">
                                <span>Вставки</span>

                                @foreach($stones as $stone)
                                    <div class="catalog__onegoods">
                                        <input type="checkbox" name="{{ $stone->slug }}" id="{{ $stone->slug }}" value="{{ $stone->id }}">
                                        <label for="{{ $stone->slug }}">{{ $stone->title }}</label>
                                    </div>
                                @endforeach

                            </div>

                            <div class="catalog__separate"></div>

                            <button type="submit" name="showfilter" id="showfilter" class="catalog__showfilter">Смотреть</button>

                        </form>

                    </div>

                    <div class="catalog__catalogcontent">

                        @foreach($products as $product)
                            <div class="homepage__cardproduct">
                                <div class="homepage__cardimg">
                                    <a href="/catalog/{{ $product->id }}">
                                        <img src="public\storage\{{ $product->picture }}" alt="{{ $product->slug }}">
                                    </a>
                                </div>
                                <div class="homepage__cardinfo">
                                    <span>{{ $product->title }}</span>
                                    <span>{{ $product->price }} руб.</span>
                                </div>
                            </div>
                        @endforeach

                    </div>

                </div>
            </div>



        </div>
    </section>




</body>
</html>