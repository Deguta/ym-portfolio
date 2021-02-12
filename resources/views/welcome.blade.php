<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>YM-PortFolio</title>
  <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
  <body>
    <class="container">
      <!-- ナビゲーションバー -->
      <nav>
        <ul >
          <li><a href=”#about-me”>自己紹介</a></li>
          <li><a href=”#career”>経歴</a></li>
          <li><a href="#products">製作物</a></li>
          <li><a href=”#skill”>スキルや学習</a></li>
          <li><a href=”#dream”>エニジニアを目指す理由</a></li>
          <li><a href=”#pr”>自己PR</a></li>
        </ul>
      </nav>
      <!-- 自己紹介 -->
      <div class="row no-gutters">
        <div class="card mt-5 mx-auto  col-md-6 col-md-offset-6">
          <div class="h2 card-header text-left back-color-gradient">
            <section id="about-me">自己紹介</section>
          </div>

          <img class="img-thumbnail col-md-8 col-md-offset-2 d-block mt-4 mx-auto" src="images/4317917_m.jpg" alt="自己紹介写真">
          <div class="card-body ">
            <p class="card-text text-center">
            採用者の皆様へ。<br>
            大変お忙しい中、お時間を割いて頂きありがとうございます！<br>
            兵庫県在住の南川 裕一(ミナミカワ ユウイチ)と申します。<br>
            サーバーサイドエンジニアを目指して大阪府 兵庫県 京都府を中心に転職活動をしております。<br>
            </p>
          </div>
        </div>
      </div>


      <div class="row no-gutters">
        <div class="card mt-5 mx-auto  col-md-6 col-md-offset-6">
          <div class="h2 card-header text-left back-color-gradient">
            <a id="career">経歴</a>
        </div>

        <div class="card-text text-left mt-3 ml-5">
          <dl>
            <dt><h3>【学歴】</h3>
              <dd>2003年4月〜2006年3月 京都成章高等学校</dd>
              <dd>2006年4月〜2010年3月 近畿大学 経営学部 経営学科 ITビジネスコース</dd>
            </dt>
            <div class="hidden_box">
              <label for="label1">学歴の詳細はこちら</label>
              <input type="checkbox" id="label1"/>
              <div class="hidden_show">
                aaaaaaaaa
              </div>
            </div>
          </dl>

          <dl>
            <dt><h3>【職歴1】</h3>
              <dd>2010年4月〜2015年9月 株式会社近商ストア</dd>
            </dt>
            <div class="hidden_box">
              <label for="label2">職歴1の詳細はこちら</label>
              <input type="checkbox" id="label2"/>
              <div class="hidden_show">
                [主な担当]
                近鉄沿線の街の活性化し豊かな暮らしを支えるための食品を中心とした商品を販売。食品の加工・販売・接客を主とした仕事。

                [成果]
                2014年度 売上3億7800万円 予算達成率 105%　粗利 1800万
                食卓を豊かにできるように旬の食材を提供したり、他部門と協力しメミュー提案をすることによって売場に工夫をした。その結果、前年の売上に対して5%程売上アップ。また、お客様が焼いてすぐに食べられるように工夫をして前年比10%アップ。企業内によるお造りコンテストで優勝。

              </div>
            </div>

          <dl>
            <dt><h3>【職歴2】</h3>
              <dd>20015年10月〜2020年12月 株式会社サカノシタ</dd>
            </dt>
            <div class="hidden_box">
              <label for="label3">職歴2の詳細はこちら</label>
              <input type="checkbox" id="label3"/>
              <div class="hidden_show">
                主な担当
                機械工具のルート営業

                【成果】
                2019年度 売上1億4000万円 粗利2100万円 
                モノづくりのサポートをモットーに機械工具の販売、提案。
                昨年の12月には大型機械の受注を頂き１億円の売上達成。
                また、弊社の当月売上ランキング1位獲得。

              </div>
            </div>
          </dl>




        </div>
      </div>





    </div>

  </body>
</html>


  
  




            {{--  <header>
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
                            <a href="#">My PortFolio</a>
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
  --}}
