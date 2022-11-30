<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title')</title>
    
    <link rel="stylesheet" href="\css\main.css">

    <div class="head_block">
        <h2>
            <a href="{{ route('main'); }}" class='head_ref'>На главную</a>
            <a href="{{ route('catalog'); }}" class='head_ref'>Каталог книг</a>
            <a href="{{ route('about'); }}" class='head_ref'>О проекте</a>
        </h2>
    </div>

</head>

<body>
    @yield('content')
</body>
</html>