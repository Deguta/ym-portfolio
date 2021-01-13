<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>YM-PortFolio</title>
    <link href="css/top_page.css" rel="stylesheet" type="text/css">
</head>
    <header class="header-help-center-web">
      <div class="header-help-center-web-inner clearfix">
        <h1 class="l-left">
          //<a href="https://www.mercari.com/jp/">
            //<img src="//pcweb-assets.mercdn.net/assets/img/common/common/logo.svg?1309563043" alt="mercari" class="logo">
          </a>
        </h1>

        <div class="l-right">
                      <a href="https://www.mercari.com/jp/signup/" class="sp-header-btn btn-red">新規会員</a>
<a href="https://www.mercari.com/jp/login/?login_callback=https%3A%2F%2Fwww.mercari.com%2Fjp%2Fhelp_center%2Fcategory%2F17%2F" class="sp-header-btn sp-header-signup">ログイン</a>
                  </div>
      </div>
    </header>
    
    <body>
        <ul id="nav">
            @if (Route::has('login'))
                @auth
                <li>
                    <a href="{{ url('/home') }}">Home</a>
                </li>

                <li>@else
                    a href="{{ route('login') }}">ログインはこちら</a>
                </li>

                <li>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">初めての方はこちら</a>
                    @endif
                </li>
                @endauth
            @endif
        </ul>

    
    
        <header class="header">
            @if (Route::has('login'))
                <nav class="login">
                    <ul>
                        <li>
                            @auth
                                <a href="{{ url('/home') }}">Home</a>
                        </li>
                        
                        <li>
                        @else
                            <a href="{{ route('login') }}">ログインはこちら</a>
                        </li>
                        
                        <li>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">初めての方はこちら</a>
                            @endif
                        </li>
                            @endauth
                    </ul>
                </nav>
            @endif
        </header>
            

    <div class="content">
        <div class="title m-b-md">
            <a href="{{ url('/contact/index') }}">YM-portfolio</a>
        </div>
    </div>
    
    
    
    
    
    
    
    </body>
</html>

