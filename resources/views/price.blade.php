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

    <section class="price">
        <div class="price__wrapper">
            @include('navbar.navbar')

            <div class="price__content">
                <div class="price__productprice">
                    <h3>Наши цены</h3>
                    <div class="price__roznica">
                        <div class="price__roznicapict">
                            <img src="\public\assets\userssources\img\product.jpg" alt="price">
                        </div>
                        <div class="price__roznicainfo">
                            <span>Изделия из золота</span>
                            <span>от 2300 рублей за грамм</span>

                            <span>Изделия из серебра</span>
                            <span>от 125 рублей за грамм</span>
                        </div>
                    </div>

                    <div class="price__opt">
                        <div class="price__optpict">
                            <img src="\public\assets\userssources\img\davalc.jpg" alt="price">
                        </div>
                        <div class="price__optinfo">
                            <span>Предусмотрена давальческая схема</span>
                            <span>от 160 рублей за грамм</span>
                            <span>оплата по факту изготовления</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="price__footer">
                @include('footer.footer')
            </div>

        </div>
    </section>

</body>
</html>