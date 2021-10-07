<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Регистрация пользователей</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/public/assets/userssources/css/style.css">
</head>
<body class="hold-transition register-page">

<div class="reg">
    <div class="reg__wrapper">
        <div class="reg__header">
            <span>Регистрация</span>
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

            <form action="{{ route('register.store') }}" method="post" class="reg__form">
                @csrf
                <input type="text" class="form-control" name="name" placeholder="Имя" value="{{ old('name') }}">
                <input type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}">
                <input type="password" class="form-control" name="password" placeholder="Пароль">
                <input type="password" name="password_confirmation" class="form-control" placeholder="Подтверждение пароля">
                <button type="submit" class="btn btn-primary btn-block">Регистрация</button>
            </form>
        </div>
    </div>
</div>


</body>
</html>
