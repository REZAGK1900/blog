<!doctype html>
<html lang="fa-IR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="/css/bootstrap.css">
    <script type="javascript" src="/js/jquery-3.3.1.min.js"></script>
    <script type="javascript" src="/js/bootstrap.js"></script>

    <title>@yield('title')</title>
</head>
<body dir="rtl">
<div class="container">
    <div class="row">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="http://localhost:8000/admin">ادمین</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('form_post') }}">افزودن پست</a>
                    </li>
                </ul>
            </div>
        </nav>
        @yield('content')
    </div>
</div>
</body>
</html>
</html>
