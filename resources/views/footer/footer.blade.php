<div class="homepage__footer">
    <div class="homepage__subscribe">
        <span>Подпишитесь на наши новости</span>
        <div class="homepage__subscribefield">
            <form action="#" method="post" name="formsubscribe" class="homepage__formsubscribe">
                <input type="email" name="describe" id="describe">
                <button name="btnsubscribe" id="btnsubscribe">ПОДПИСАТЬСЯ</button>
            </form>
        </div>
    </div>
    <div class="homepage__navbarlinks">
        <a href="{{ route('catalog') }}">Каталог</a>
        <span>|</span>
        <a href="{{ route('price') }}">Прайс лист</a>
        <span>|</span>
        <a href="{{ route('contacts') }}">Контакты</a>
        <span>|</span>
        <a href="{{ route('about') }}">О компании</a>
        <span>|</span>
        <a href="{{ route('shops') }}">Где купить</a>
    </div>
</div>