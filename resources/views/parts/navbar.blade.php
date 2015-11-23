<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"></button>
            <a href="/" class="navbar-brand">ITWorkBoard</a>
        </div>
        {{-- メニュー --}}
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            {{-- 左寄せメニュー --}}
            @if(!Auth::guest())
            <ul class="nav navbar-nav">
                <li><a href="/mypage">このサイトについて</a></li>
                <li><a href="/workboard">ワークボード</a></li>
            </ul>
            @endif
            {{-- 右寄せメニュー --}}
            <ul class="nav navbar-nav navbar-right">
                @if(Auth::guest())
                {{-- ログインしていないとき --}}
                <li><a href="/auth/login">ログイン</a></li>
                <li><a href="/auth/register">新規作成</a></li>
                @else
                {{-- ログインしている時 --}}
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{Auth::user() -> name}}
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="/auth/logout">ログアウト</a></li>
                    </ul>
                </li>
                @endif
            </ul>
        </div>
    </div>
</nav>