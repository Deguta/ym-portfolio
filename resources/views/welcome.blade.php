<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>YM-PortFolio</title>
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
    <link href="{{asset('/assets/css/style.css')}}" rel="stylesheet">

</head>
    <body>
        <div class="wrapper">

            <header>
                <img src="{{ asset("../images/4284040_m.jpg") }}" alt="top-page" class="top-page-image">  
                <p class="title">YM-PortFolio</p>
            </header>



            <div class="main">
                <div class="about"t>
                    <img src="{{ asset("../images/1647568_s.jpg") }}" alt="about-me" class="about-image">
                    <div class="about-text">
                        <div class="about-text-box">
                            <a href="{{ url('/about_me/index') }}">About Me</a>
                        </div>
                    </div>
                </div>

                <div class="skill">
                    <img src="{{ asset("../images/321288_l.jpg") }}" alt="skill" class="skill-image">
                    <div class="skill-text">
                        <div class="skill-text-box">
                            <a href="{{ url('/skill/index') }}">My Skill</a>
                        </div>
                    </div>
                </div>

                <div class="portfolio">
                    <img src="{{ asset("../images/2816548_s.jpg") }}" alt="portfolio-works" class="portfolio-image">
                    <div class="portfolio-text">
                        <div class="portfolio-text-box">
                            <a href="{{ url('/bulletin_board/index') }}">My PortFolio</a>
                        </div>
                    </div>
                </div>

                <div class="story">
                    <img src="{{ asset("../images/4305569_s.jpg") }}" alt="story" class="story-image">
                    <div class="story-text">
                        <div class="story-text-box">
                            <a href="{{ url('/story/index') }}">About Of PortFolio</a>
                        </div>
                    </div>
                </div>

                <div class="contact">
                    <img src="{{ url("../images/4358663_s.jpg") }}" alt="お問い合わせ" class="contact-image">
                    <div class="contact-text">
                        <div class="contact-text-box">
                            <a href="{{ url('/contact/index') }}">Contact</a>
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