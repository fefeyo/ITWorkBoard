<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>{{$title or "ITWorkBoard"}}</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link href='http://fonts.googleapis.com/css?family=Patrick+Hand+SC'rel='stylesheet'type='text/css'>
    <link rel="stylesheet" src="//normalize-css.googlecode.com/svn/trunk/normalize.css" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    @yield('addCss')
</head>
<body>

    <div class="container">
        @yield('content')
    </div>

    <footer class="footer" style="background:{{$color or '#000'}}">
        <div class="container">
            <p style="text-align: center; color: white">©Sakata Yu</p>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    @yield('addJs')
</body>
</html>