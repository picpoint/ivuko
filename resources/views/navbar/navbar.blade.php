<div class="homepage__navbar">
    <div class="homepage__navbarmenu">
        <div class="homepage__navbarlogo">
            <a href="{{ route('homepage') }}">
                <img src="/public/assets/userssources/img/logo3.png" alt="logo">
            </a>
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
        <div class="homepage__navbaraccount">

            @if(\Illuminate\Support\Facades\Auth::check())
                <span>{{ \Illuminate\Support\Facades\Auth::user()->name }}</span>
                <a href="{{ route('logout') }}">Выход</a>
            @else
                <a href="{{ route('login') }}">Вход</a>
                <a href="#"> / </a>
                <a href="{{ route('register.create') }}">Регистрация</a>
            @endif



        </div>
    </div>
</div>