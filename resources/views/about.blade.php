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

<section class="about">
    <div class="about__wrapper">
        @include('navbar.navbar')

        <div class="about__content">
            <div class="about__contblock">
                <h3>О нас ...</h3>

                <div class="about__conts">
                    <span>
                        Ивановская Ювелирная Компания более 20 лет успешно занимается изготовлением и оптовой продажей ювелирных изделий.
                        Мужские кольца, запонки, женские кольца, серьги, подвески, пирсинг.
                        <br><br>
                        Золото и серебро, драгоценные и полудрагоценные камни, синтетические – цветные, черные и бесцветные вставки, эмали.
                        <br><br>
                        Работаем на собственном и давальческом сырье. Изделия из серебра родированные. Высокое качество, гибкие цены.
                        <br><br>
                        Ивановская Ювелирная Компания - лидер рынка по производству мужских печаток, около 1000 моделей классического и современного дизайна.
                    </span>
                </div>

            </div>
        </div>

        <div class="about__footer">
            @include('footer.footer')
        </div>

    </div>
</section>

</body>
</html>