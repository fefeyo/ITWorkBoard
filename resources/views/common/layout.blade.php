{{--
メインのフレームのテンプレート
ヘッダーとフッターが上下に固定されているページに使用
--}}

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Patrick+Hand+SC'rel='stylesheet'type='text/css'>
    <link rel="stylesheet" type="text/css" href='{{asset('css/style.css')}}'>
    @yield('addCss')
    <title>{{isset($title) ? $title : 'ITWorkBoard'}}</title>
</head>
<body>
    <header id="header">
        <p id="header-title">ITWorkBoard</p>
    </header>

    @yield('content')

    <footer id="footer">
        <p id="footer-text">©プロジェクト演習</p>
    </footer>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    @yield('addJs')
</body>
</html>
