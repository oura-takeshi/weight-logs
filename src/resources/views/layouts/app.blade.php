<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PiGLy</title>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    @yield('css')
</head>

<body>
    <div class="app">
        <header class="header">
            <h1 class="header__heading">PiGLy</h1>
            <div class="header__buttons">
                <button class="header__goal-setting-button">目標体重設定</button>
                <form class="header__form" action="/logout" method="post">
                    @csrf
                    <button class="header__logout-button" type="submit">ログアウト</button>
                </form>
            </div>
        </header>
        <div class="content">
            @yield('content')
        </div>
    </div>
</body>

</html>