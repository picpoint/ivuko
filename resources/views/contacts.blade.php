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

<section class="contacts">
    <div class="contacts__wrapper">
        @include('navbar.navbar')

        <div class="contacts__content">
            <div class="contacts__contblock">
                <h3>Наши контакты</h3>

                <div class="contacts__conts">
                    <span>ООО "Ивановская Ювелирная Компания", ИНН3702651538/ОГРН1113702016933</span>
                    <span>Адрес: 153000, Россия, г. Иваново, ул. Парижской Коммуны, 16</span>
                    <span>Телефон: +7 (4932) 30-34-38</span>
                    <span>Факс: +7 (4932) 30-34-38</span>
                    <span>Электронная почта: pechatka&#64bk.ru</span>
                </div>

            </div>
        </div>

        <div class="contacts__footer">
            @include('footer.footer')
        </div>

    </div>
</section>

</body>
</html>