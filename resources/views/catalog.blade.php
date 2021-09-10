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
                            <div class="catalog__filtercategory">
                                <span>Категория украшений</span>
                                <div class="catalog__onegoods">
                                    <input type="checkbox" name="zhenskie-kolca" id="zhenskie-kolca">
                                    <label for="zhenskie-kolca">Женские кольца</label>
                                </div>
                                <div class="catalog__onegoods">
                                    <input type="checkbox" name="zaponki" id="zaponki">
                                    <label for="zaponki">Запонки</label>
                                </div>
                                <div class="catalog__onegoods">
                                    <input type="checkbox" name="muzhskie-kolca" id="muzhskie-kolca">
                                    <label for="muzhskie-kolca">Мужские кольца</label>
                                </div>
                            </div>

                            <div class="catalog__separate"></div>

                            <div class="catalog__filtermaterial">
                                <span>Материал</span>
                                <div class="catalog__onegoods">
                                    <input type="checkbox" name="zoloto" id="zoloto">
                                    <label for="zoloto">Золото</label>
                                </div>
                                <div class="catalog__onegoods">
                                    <input type="checkbox" name="serebro" id="serebro">
                                    <label for="serebro">Серебро</label>
                                </div>
                            </div>

                            <div class="catalog__separate"></div>

                            <div class="catalog__filterstones">
                                <span>Вставки</span>
                                <div class="catalog__onegoods">
                                    <input type="checkbox" name="agat" id="agat">
                                    <label for="agat">Агат</label>
                                </div>
                                <div class="catalog__onegoods">
                                    <input type="checkbox" name="aleksandrit" id="aleksandrit">
                                    <label for="aleksandrit">Александрит</label>
                                </div>
                                <div class="catalog__onegoods">
                                    <input type="checkbox" name="ametist" id="ametist">
                                    <label for="ametist">Аметист</label>
                                </div>
                                <div class="catalog__onegoods">
                                    <input type="checkbox" name="bez-vstavki" id="bez-vstavki">
                                    <label for="bez-vstavki">Без вставки</label>
                                </div>
                            </div>

                            <div class="catalog__separate"></div>

                            <button type="submit" name="showfilter" id="showfilter" class="catalog__showfilter">Смотреть</button>

                        </form>

                    </div>

                    <div class="catalog__catalogcontent">
                        <div class="homepage__cardproduct">
                            <div class="homepage__cardimg">
                                <a href="#">
                                    <img src="public\assets\userssources\img\pages\ring.jpg" alt="jewelry_product">
                                </a>
                            </div>
                            <div class="homepage__cardinfo">
                                <img src="public\assets\userssources\img\pages\stars.jpg" alt="stars">
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
                                <img src="public\assets\userssources\img\pages\stars.jpg" alt="stars">
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
                                <img src="public\assets\userssources\img\pages\stars.jpg" alt="stars">
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
                                <img src="public\assets\userssources\img\pages\stars.jpg" alt="stars">
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
                                <img src="public\assets\userssources\img\pages\stars.jpg" alt="stars">
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
                                <img src="public\assets\userssources\img\pages\stars.jpg" alt="stars">
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
                                <img src="public\assets\userssources\img\pages\stars.jpg" alt="stars">
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
                                <img src="public\assets\userssources\img\pages\stars.jpg" alt="stars">
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
                                <img src="public\assets\userssources\img\pages\stars.jpg" alt="stars">
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
                                <img src="public\assets\userssources\img\pages\stars.jpg" alt="stars">
                                <span>Tic small Alessi</span>
                                <span>$85.0</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>



        </div>
    </section>




</body>
</html>