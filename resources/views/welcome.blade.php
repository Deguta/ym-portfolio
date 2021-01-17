<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>YM-PortFolio</title>
    <link rel="stylesheet" href="{{ asset('css/top_page.css') }}">
    
</head>
    <body>
        <div class="wrapper">

            <header>
                <img src="{{ asset("../images/2816548_s.jpg") }}" alt="トップページ" class="top-page-image">  
                <p>YM-PortFolio</p>
            </header>
            <div class="main">
                <div class=about>
                    <img src="{{ asset("../images/1647568_s.jpg") }}" alt="about-me" class="about-image">
                    <div class="about-text">
                        <div class="about-text-box">
                            <a href="{{ url('/contact/index') }}">About Me</a>
                        </div>
                    </div>
                </div>

                <div class=portfolio>
                    <img src="{{ asset("../images/2816548_s.jpg") }}" alt="portfolio-works" class="portfolio-image">
                    <div class="portfolio-text">
                        <div class="portfolio-text-box">
                            <a href="{{ url('/contact/index') }}">製作物はこちら</a>
                        </div>
                    </div>
                </div>

                <div class=contact>
                    <img src="{{ url("../images/4358663_s.jpg") }}" alt="お問い合わせ" class="contact-image">
                    <div class="contact-text">
                        <div class="contact-text-box">
                            <a href="{{ url('/contact/index') }}">お問い合わせはこちら</a>
                        </div>
                    </div>
                </div>


                

            </div>     
                   
  

           
        </div>
    </body>
</html>



{{--  @if (Route::has('login'))
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
                @endif  --}}