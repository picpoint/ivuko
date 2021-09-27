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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>


    <section class="catalog">
        <div class="catalog__wrapper">
            @include('navbar.navbar')

            <div class="catalog__describe">
                <span>Полный каталог украшений</span>
            </div>

            <div class="catalog__search">
                <form method="post" class="catalog__searchform">
                    @csrf
                    <input type="search" id="search" name="search" placeholder="Поиск товара(введите артикул товара)">
                    <button type="submit" class="btn btn-lg btn-default">
                        <i class="fa fa-search"></i>
                    </button>
                </form>
            </div>

            <div class="catalog__catalogblock">
                <div class="catalog__catalogwrapper">
                    <div class="catalog__catalogfilter">
                        <div class="catalog__filterdefault">
                            <span>Фильтры</span>
                            <a href="{{ route('catalog') }}">Сбросить</a>
                        </div>

                        <div class="catalog__separate"></div>

                        <form action="#" method="post" name="formfilter" class="catalog__formfilter">
                            @csrf
                            <div class="catalog__filtercategory">
                                <span>Категория украшений</span>

                                @foreach($categories as $category)
                                    <div class="catalog__onegoods">
                                        <input type="checkbox" name="c_{{ $category->slug }}" id="{{ $category->slug }}" value="{{ $category->id }}">
                                        <label for="{{ $category->slug }}">{{ $category->title }}</label>
                                    </div>
                                @endforeach

                            </div>

                            <div class="catalog__separate"></div>

                            <div class="catalog__filtermaterial">
                                <span>Материал</span>

                                @foreach($materials as $material)
                                    <div class="catalog__onegoods">
                                        <input type="checkbox" name="m_{{ $material->slug }}" id="m_{{ $material->slug }}" value="{{ $material->id }}">
                                        <label for="m_{{ $material->slug }}">{{ $material->title }}</label>
                                    </div>
                                @endforeach

                            </div>

                            <div class="catalog__separate"></div>

                            <div class="catalog__filterstones">
                                <span>Вставки</span>

                                @foreach($stones as $stone)
                                    <div class="catalog__onegoods">
                                        <input type="checkbox" name="s_{{ $stone->slug }}" id="{{ $stone->slug }}" value="{{ $stone->id }}">
                                        <label for="{{ $stone->slug }}">{{ $stone->title }}</label>
                                    </div>
                                @endforeach

                            </div>

                            <div class="catalog__separate"></div>

                            <button type="submit" id="showfilter" class="catalog__showfilter">Смотреть</button>

                        </form>

                    </div>

                    <div class="catalog__catalogcontent">

                        @foreach($products as $product)
                            <div class="homepage__cardproduct">
                                <div class="homepage__cardimg">
                                    <a href="/catalog/productsingle/{{ $product->id }}">
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

            <div class="catalog__footer">
                @if($pagination == 'yes')
                    {{ $products->links() }}
                @else

                @endif
            </div>



        </div>
    </section>




</body>
</html>