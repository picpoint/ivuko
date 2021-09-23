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

    <section class="homepage">
        <div class="homepage__wrapper">
            <div class="homepage__slider">
                @include('navbar.navbar')
            </div>

            <div class="homepage__selection">
                <div class="homepage__selectwrapper">
                    <div class="homepage__menrings">
                        <div class="homepage__text">
                            <span>Мужские кольца</span>
                            <a href="#">СМОТРЕТЬ ВСЕ КОЛЬЦА</a>
                        </div>
                        <div class="homepage__pict">
                            <img src="public/assets/userssources/img/menring.png" alt="ring">
                        </div>
                    </div>
                    <div class="homepage__pendant">
                        <div class="homepage__text">
                            <span>Подвески</span>
                            <a href="#">СМОТРЕТЬ ВСЕ ПОДВЕСКИ</a>
                        </div>
                        <div class="homepage__pict">
                            <img src="public/assets/userssources/img/pedant.png" alt="pendant">
                        </div>
                    </div>
                    <div class="homepage__earrings">
                        <div class="homepage__text">
                            <span>Серьги</span>
                            <a href="#">СМОТРЕТЬ ВСЕ СЕРЬГИ</a>
                        </div>
                        <div class="homepage__pict">
                            <img src="public/assets/userssources/img/earring.png" alt="earring">
                        </div>
                    </div>
                </div>
            </div>

            <div class="homepage__newproduct">
                <div class="homepage__newproductwrapper">
                    <div class="homepage__newproducttitle">
                        <span>Новые модели</span>
                    </div>
                    <div class="homepage__cardsblock">
                        <div class="homepage__cardproduct">
                            <div class="homepage__cardimg">
                                <a href="#">
                                    <img src="public\assets\userssources\img\pages\earrings.jpg" alt="jewelry_product">
                                </a>
                            </div>
                            <div class="homepage__cardinfo">
                                {{--<img src="public\assets\userssources\img\pages\stars.jpg" alt="stars">--}}
                                <span>Tic small Alessi</span>
                                <span>$85.0</span>
                            </div>
                        </div>
                        <div class="homepage__cardproduct">
                            <div class="homepage__cardimg">
                                <a href="#">
                                    <img src="public\assets\userssources\img\pages\ring.jpg" alt="jewelry_product">
                                </a>
                            </div>
                            <div class="homepage__cardinfo">
                                {{--<img src="public\assets\userssources\img\pages\stars.jpg" alt="stars">--}}
                                <span>Tic small Alessi</span>
                                <span>$85.0</span>
                            </div>
                        </div>
                        <div class="homepage__cardproduct">
                            <div class="homepage__cardimg">
                                <a href="#">
                                    <img src="public\assets\userssources\img\pages\necklace.jpg" alt="jewelry_product">
                                </a>
                            </div>
                            <div class="homepage__cardinfo">
                                {{--<img src="public\assets\userssources\img\pages\stars.jpg" alt="stars">--}}
                                <span>Tic small Alessi</span>
                                <span>$85.0</span>
                            </div>
                        </div>
                        <div class="homepage__cardproduct">
                            <div class="homepage__cardimg">
                                <a href="#">
                                    <img src="public\assets\userssources\img\pages\pendant.jpg" alt="jewelry_product">
                                </a>
                            </div>
                            <div class="homepage__cardinfo">
                                {{--<img src="public\assets\userssources\img\pages\stars.jpg" alt="stars">--}}
                                <span>Tic small Alessi</span>
                                <span>$85.0</span>
                            </div>
                        </div>
                        <div class="homepage__cardproduct">
                            <div class="homepage__cardimg">
                                <a href="#">
                                    <img src="public\assets\userssources\img\pages\ring2.jpg" alt="jewelry_product">
                                </a>
                            </div>
                            <div class="homepage__cardinfo">
                                {{--<img src="public\assets\userssources\img\pages\stars.jpg" alt="stars">--}}
                                <span>Tic small Alessi</span>
                                <span>$85.0</span>
                            </div>
                        </div>
                        <div class="homepage__cardproduct">
                            <div class="homepage__cardimg">
                                <a href="#">
                                    <img src="public\assets\userssources\img\pages\earrings.jpg" alt="jewelry_product">
                                </a>
                            </div>
                            <div class="homepage__cardinfo">
                                {{--<img src="public\assets\userssources\img\pages\stars.jpg" alt="stars">--}}
                                <span>Tic small Alessi</span>
                                <span>$85.0</span>
                            </div>
                        </div>
                        <div class="homepage__cardproduct">
                            <div class="homepage__cardimg">
                                <a href="#">
                                    <img src="public\assets\userssources\img\pages\pendant.jpg" alt="jewelry_product">
                                </a>
                            </div>
                            <div class="homepage__cardinfo">
                                {{--<img src="public\assets\userssources\img\pages\stars.jpg" alt="stars">--}}
                                <span>Tic small Alessi</span>
                                <span>$85.0</span>
                            </div>
                        </div>
                        <div class="homepage__cardproduct">
                            <div class="homepage__cardimg">
                                <a href="#">
                                    <img src="public\assets\userssources\img\pages\necklace.jpg" alt="jewelry_product">
                                </a>
                            </div>
                            <div class="homepage__cardinfo">
                                {{--<img src="public\assets\userssources\img\pages\stars.jpg" alt="stars">--}}
                                <span>Tic small Alessi</span>
                                <span>$85.0</span>
                            </div>
                        </div>
                        <div class="homepage__cardproduct">
                            <div class="homepage__cardimg">
                                <a href="#">
                                    <img src="public\assets\userssources\img\pages\earrings.jpg" alt="jewelry_product">
                                </a>
                            </div>
                            <div class="homepage__cardinfo">
                                {{--<img src="public\assets\userssources\img\pages\stars.jpg" alt="stars">--}}
                                <span>Tic small Alessi</span>
                                <span>$85.0</span>
                            </div>
                        </div>
                        <div class="homepage__cardproduct">
                            <div class="homepage__cardimg">
                                <a href="#">
                                    <img src="public\assets\userssources\img\pages\ring.jpg" alt="jewelry_product">
                                </a>
                            </div>
                            <div class="homepage__cardinfo">
                                {{--<img src="public\assets\userssources\img\pages\stars.jpg" alt="stars">--}}
                                <span>Tic small Alessi</span>
                                <span>$85.0</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="homepage__services">
                <div class="homepage__serviceswrapper">

                    <div class="homepage__shipping">
                        <div class="homepage__shippingimg">
                            <img src="\public\assets\userssources\img\rocket.jpg" alt="rocket">
                        </div>
                        <div class="homepage__shippingdesc">
                            <span>Быстрая и бесплатная доставка</span>
                            <span>Все заказы от 2000р</span>
                        </div>
                    </div>

                    <div class="homepage__save">
                        <div class="homepage__saveimg">
                            <img src="\public\assets\userssources\img\call.jpg" alt="call">
                        </div>
                        <div class="homepage__savedesc">
                            <span>Скидка до 20%</span>
                            <span>при заказе по телефону</span>
                        </div>
                    </div>

                    <div class="homepage__support">
                        <div class="homepage__supportimg">
                            <img src="\public\assets\userssources\img\car.jpg" alt="support">
                        </div>
                        <div class="homepage__supportdesc">
                            <span>Онлайн поддержка</span>
                            <span>подарки при регистрации</span>
                        </div>
                    </div>

                    <div class="homepage__back">
                        <div class="homepage__backimg">
                            <img src="\public\assets\userssources\img\pig.jpg" alt="back">
                        </div>
                        <div class="homepage__backdesc">
                            <span>14 дней для возврата</span>
                            <span>при сохранении товарного вида</span>
                        </div>
                    </div>
                    
                </div>
            </div>

            @include('footer.footer')

        </div>
    </section>


{{--<script src="public/assets/userssources/js/test.js"></script>--}}
</body>
</html>