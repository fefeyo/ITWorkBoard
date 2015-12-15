<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ITWorkBoard</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Patrick+Hand+SC'rel='stylesheet'type='text/css'>
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <style type="text/css">
        #container {
            width: 100%;
            height: 100%;
            background: url("http://archetypenova.sakura.ne.jp/proen/top_haikei.jpg");
            background-size: cover;
            background-position: center;
            position: relative;
        }
        #contains {
            width: 80%;
            margin: auto;
            text-align: center;
        }
        .login {
            width: 50%;
            height: 100px;
            font-size: 2.0em;
            font-family: "Sacramento", cursive;
        }
        img {
            width: 100%;
            margin: 200px auto;
        }
    </style>
</head>
<body>

    <div id="container">
        <div id="contains">
            <img src="http://archetypenova.sakura.ne.jp/proen/title.png">
            <div class="btn-group" style="width: 100%;">
                <button class="btn btn-warning login" onclick="window.location = '/auth/login'">Login</button>
                <button class="btn btn-danger btn-lg login" onclick="window.location = '/auth/register'">Register</button>
            </div>
        </div>
    </div>

</body>
</html>