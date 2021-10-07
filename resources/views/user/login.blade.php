<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Авторизация пользователей</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/public/assets/userssources/css/style.css">
</head>
<body class="hold-transition register-page">

<div class="reg">
    <div class="reg__wrapper">
        <div class="reg__header">
            <span>Авторизация</span>
        </div>
        <div class="reg__regblock">

            @if($errors->any())
                <div class="reg__alert">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if(session()->has('error'))
                <div class="reg__alert">
                    {{ session('error') }}
                </div>
            @endif

            <form action="{{ route('login') }}" method="post" class="reg__form">
                @csrf
                <input type="email" class="form-control" name="email" placeholder="Email">
                <input type="password" class="form-control" name="password" placeholder="Пароль">
                <button type="submit" class="btn btn-primary btn-block">Авторизация</button>
            </form>

        </div>

    </div>
</div>


</body>
</html>
