<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>YM-PortFolio</title>
    <link rel="stylesheet" href="{{ asset('css/online_reviews/top_page.css') }}">
    <link href="{{asset('/assets/css/reset.css')}}" rel="stylesheet">
</head>
    <body>
        <div class="wrapper">
            <header>
            @if (Route::has('login'))
                <div class="header-left">ロゴ作成予定</div>

                <div class="header-right">
                    @auth
                        <a href="{{ url('/home') }}">ログアウトはこちら</a>
                    @else
                        <div class=login>
                            <a href="{{ route('login') }}">ログイン</a>
                        </div>
                        <div class=register>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">新規会員はこちら</a>
                        @endif
                        </div>
                    @endauth
                </div>
                @endif
            </header>

            <div class="main">mainページ
                <a href="{{ route('online_reviews.index') }}">病院一覧</a>
            </div>
        </div>
    </body>
</html>

