<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <!-- SEO対策 レスポンシブデザイン -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>YM-PortFolio</title>
  <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <!-- レスポンシブデザイン CSS  750px以下になると反映 -->
  <link href="{{ asset('css/welcome.css') }}" rel="stylesheet" media="screen and (max-width:750px)" >
  <!-- JQuery  script -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>

  <body>
    <div class="container">

      <nav class="navbar navbar-expand-md navbar-light">
        <a class="navbar-brand" href="#">YM-PortFolio</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav9" aria-controls="navbarNav9" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <ul class="collapse navbar-collapse justify-content-around pl-0 mb-0 text-decoration-none" id="navbarNav9">
          <li><a href="#about-me">自己紹介</a></li>
          <li><a href="#carrer" >経歴</a></li>
          <li><a href="#products" >製作物</a></li>
          <li><a href="#skill" class="skill">プログラミングスキル<br>今後の学習</a></li>
          <li><a href="#dream" class="dream"> エニジニアを<br>目指す理由</a></li>
          <li><a href="#pr" >自己PR</a></li>
          <li><a href="#requirement">資格・特技</a></li>
          <li><a href="#last">最後に</a></li>
          <li><a href="#contact">お問い合わせ</a></li>
        </ul>
      </nav>


      <!-- <nav>
        <ul>
          <li><a href="#about-me" class="text-decoration-none" style="font-size:20px;">自己紹介</a></li>
          <li><a href="#carrer" class="text-decoration-none" style="font-size:20px;">経歴</a></li>
          <li><a href="#products" class="text-decoration-none" style="font-size:20px;">製作物</a></li>
          <li><a href="#skill" class="text-decoration-none font-weight-bold" style="font-size:11px;">プログラミングスキル <br>今後の学習</a></li>
          <li><a href="#dream"class="dream text-decoration-none font-weight-bold">エニジニアを<br>目指す理由</a></li>
          <li><a href="#pr" class="text-decoration-none" style="font-size:20px;">自己PR</a></li>
          <li><a href="#requirement" class="text-decoration-none" style="font-size:18px;">資格・特技</a></li>
          <li><a href="#last" class="text-decoration-none" style="font-size:20px;">最後に</a></li>
          <li><a href="#contact" class="text-decoration-none" style="font-size:18px;">お問い合わせ</a></li>
        </ul>
      </nav> -->

      <!-- 自己紹介 -->
      <div class="row no-gutters">
        <div class="card mt-5 mx-auto  col-md-9 md-offset-3">
          <div class="h2 card-header text-left back-color-gradient ">
            <h3 id="about-me" class="mb-0">自己紹介</h3>
          </div>

          <p class="top-image">
            <img src="{{ asset('/images/top-image.jpg') }}" class="img-thumbnail col-md-10 md-offset-2 d-block mt-4 mx-auto"  alt="自己紹介写真">
          </p>

          <div class="card-body">
            <p class="text-center" id="about-me-text">
            採用者の皆様へ。<br>
            大変お忙しい中、お時間を割いて頂き<br class="about-me-new-line">ありがとうございます！<br>
            兵庫県在住の南川 裕一(ミナミカワ ユウイチ)と申します。<br>
            サーバーサイドエンジニアを目指して<br class="about-me-new-line">大阪府 兵庫県 京都府を中心に
            <br class="about-me-new-line">転職活動をしております。<br>
            </p>
          </div>
        </div>
      </div>


      <div class="row no-gutters">
        <div class="card mt-5 mx-auto  col-md-9 md-offset-3">
          <div class="h2 card-header text-left back-color-gradient">
            <id id="carrer" class="mb-0">経歴</id>
          </div>
          <div class="card-body">

            <!-- 学歴 -->
            <div class="p-2 mb-2 h4 text-center bg-primary text-white mx-auto" style="width: 200px;">【学歴】</div>
              <dd class="text-center font-weight-bold">2003年4月〜2006年3月 京都成章高等学校</dd>
              <dd class="text-center font-weight-bold">2006年4月〜2010年3月 近畿大学 経営学部 <br class="carrer-new-line">経営学科 ITビジネスコース</dd>

            <p class="font-weight-bold text-center mt-3 h4">
              ITの専攻を選び
              <br>部活動を通じて社会人に<br class="carrer-new-line">必要なことをたくさん経験した<br class="carrer-new-line">大学時代
            </p>

            <div class="school-career-box">
              <input id="hidden1" class="school-career-top-text" type="checkbox">
                　専攻ではITビジネスコースに入学しましたので基本的なマークアップ言語は勉強しました。
                ITビジネスコースに専攻した理由は、高校時代、簡単なホームページを作成しました。
                インターネットで検索してそれを形にできるという面白みを勉強したので専攻として選びました。
                <label class="school-career-btn" for="hidden1"></label>
              <div class="school-career-hidden-text">
                　部活動の新聞部で一番印象に残ったインタビューが元 大阪市長 橋下徹さんです。
                所属事務所のアポ取り、記事チェックを行い、最後は新聞の発行の許可を貰うために大学の職員の打ち合わせを行いました。
                新聞を作るにはこのような工程が多く、その経験を沢山積むことができたので、社会人に必要な経験を学びました。<br>
                　また、大学祭実行委員会では、イベント企画を担当しました。大学祭では毎年、吉本芸人が漫才を披露する大きなイベントがあります。
                ミーティングでは吉本興業のマネージャーが来られますので必要なことを聞き出すことが大切です。
                どうしたらイベントがスムーズにできるのか何度も話し合い当日を迎えることができました。
                そのお陰で、来場者が安心・安全にイベントを楽しめることできたのが何よりの達成感でした。<br>
              </div>
            </div>

            <!-- 学歴 写真-->
            <div class="mt-3 d-flex col-12 justify-content-center">
              <div class="campus col-6">
                <img src="{{ asset('/images/campus.jpg') }}" class="campus-image img-thumbnail img-fluid mt-1"  alt="近畿大学 経営学部 キャンパス">
                <p class="campus-text text-dark">近畿大学 経営学部 キャンパス</p>
              </div>

              <div class="bukatsu col-6">
                <img src="{{ asset('/images/bukatsu.jpg') }}" class="bukatsu-image img-thumbnail img-fluid mt-1 mx-auto "  alt="近畿大学新聞会">
                <p class="bukatsu-text text-white">近畿大学新聞会</p>
              </div>
            </div>

            <div class="d-flex col-12 mt-3 justify-content-center">
              <div class="hashimoto col-6">
                <img src="{{ asset('/images/hashimoto.jpg') }}" class="hashimoto-image img-thumbnail img-fluid mt-1"  alt="元 大阪市長 橋下徹 さん">
                <p class="hashimoto-text text-dark">元 大阪市長 橋下徹 さん</p>
              </div>

              <div class="owarai col-6">
                <img src="{{ asset('/images/owarai.jpg') }}" class="owarai-image img-thumbnail img-fluid mt-1 mx-auto "  alt="お笑い芸人 千鳥さん モンスターエンジンさん">
                <p class="owarai-text1 text-dark">吉本興業 千鳥さん</p>
                <p class="owarai-text2 text-dark">吉本興業 モンスターエンジンさん</p>
              </div>
            </div>


            <!-- 職歴1 -->
            <dt class="mt-5 text-center"><div class="p-2 mb-2 h4 bg-primary text-white mx-auto" style="width: 200px;">【職歴1】</div>
              <dd class="text-center font-weight-bold">2010年4月〜2015年9月 株式会社近商ストア</dd>
            </dt>

            <p class="text-center font-weight-bold mb-0">[主な仕事]</p>
            <p class="text-center">近鉄沿線の街の活性化し豊かな暮らしを支えるため食品を中心とした商品を販売。</p>

            <p class="text-center font-weight-bold mb-0">[主な担当]</p>
            <p class="text-center" >水産の課長として任命され魚の加工・販売・<br class="carrer-new-line">接客を主とした仕事を6年半続けてきました。</p>

            <p class="text-center font-weight-bold mb-0">[成果]</p>
            <p class="text-center">2014年度 売上3億7800万円 <br class="carrer-new-line">予算達成率 105%　粗利 1800万</p>

            <p class="class = text-center font-weight-bold mb-0">[実績]</p>
            <p class="font-weight-bold text-center mt-1 h4">
              魚の食べ辛さを解消し<br>
              全店舗 水産の売上高&粗利 No1
            </p>

            <div class="work-history-box1">
              <input id="hidden2" class="work-history-top-text1" type="checkbox">
              　2013年度の売上と粗利があまりにも酷く、どの様にしたら少しでも改善できるか悩んでいる時期がありました。
              そこで私はお客様にアンケートを行い集計をしました。その結果、魚の骨に刺さるのが嫌というのが分かりました。
              原因である骨を除去してお客様に安心して食べれる様に工夫しようという作戦を立てました。
              <label class="work-history-btn1" for="hidden2"></label>
              <div class = "work-history-hidden-text1">
                そこで私は魚の骨取りをして、なるべく食べやすい様に加工をして商品アピールをしました。
                また、食べやすさを追求するために調理をせずにフライパン1枚で焼けるような商品も考えました。
                食品メーカーにお願いをして、専用のタレを作ってもらうように依頼しました。その結果、お客様から好評を頂き見事売上をV字回復しました。<br>
                　売上としては伸びましたがその反面粗利があまりありませんでした。そこで、粗利がしっかり取れるお造りに注目しました。
                夕方にお造りを大量に売ることを実施し、他の競合店を差別化するためにボリューム感を出すようにしました。
                その結果こちらも粗利が伸びこの二つの実績を出したことにより2014年度の売上と粗利は全店舗No1になることができました。
              </div>
            </div>


            <!--職歴1 写真-->
            <div class="mt-3 d-flex col-12 justify-content-center">
              <div class="tai col-6">
                <img src="{{ asset('/images/tai.jpg') }}" class="tai-image img-thumbnail img-fluid mt-1"  alt="お造り写真1">
                <p class="tai-text text-white">鯛姿造り</p>
              </div>

              <div class="nabe col-6">
                <img src="{{ asset('/images/nabe.jpg') }}" class="nabe-image img-thumbnail img-fluid mt-1 mx-auto "  alt="お造り写真2">
                <p class="nabe-text text-white">骨抜き済 鍋盛り合わせ</p>
              </div>
            </div>

            <div class="d-flex col-12 mt-3 justify-content-center">
              <div class="buri col-6">
                <img src="{{ asset('/images/buri.jpg') }}" class="buri-image img-thumbnail img-fluid mt-1"  alt="お造り写真1">
                <p class="buri-text text-white">鰤お造り</p>
              </div>
              <div class="sanma col-6">
                <img src="{{ asset('/images/sanma.jpg') }}" class="sanma-image img-thumbnail img-fluid mt-1 mx-auto "  alt="お造り写真2">
                <p class="sanma-text text-dark">秋刀魚お造り</p>
              </div>
            </div>


            <!-- 職歴2 -->
            <dt class="mt-5 text-center"><div class="p-2 mb-2 h4 bg-primary text-white mx-auto" style="width: 200px;">【職歴2】</div>
              <dd class="text-center font-weight-bold">2015年10月〜2020年12月 <br class="carrer-new-line">株式会社サカノシタ</dd>
            </dt>
            <p class="text-center font-weight-bold mb-0">[主な仕事]</p>
            <p class="text-center">モノづくりサポートをモットーに<br class="carrer-new-line">機械工具のルート営業。</p>

            <p class="text-center font-weight-bold mb-0">[主な担当]</p>
            <p class="text-center" >大阪府 枚方市エリアを中心にメーカーを<br class="carrer-new-line">メインに営業活動をしました。</p>

            <p class="text-center font-weight-bold mb-0">[成果]</p>
            <p class="text-center">2019年度 売上1億4000万円 粗利2100万円</p>

            <p class="class = text-center font-weight-bold mb-0">[実績]</p>
              <p class="font-weight-bold text-center mt-1 h4">
                取引先をリスト化して効率化を捗り大型案件を受注
            </p>

            <div class="work-history-box2">
              <input id="hidden3" class="work-history-top-text2" type="checkbox">
              　前職では機械工具のルート営業をしていました。
              弊社の取引先で特注の商品を作ってもらいそれを得意先に納品をしていましたが後継者不足により倒産が相次いでいました。
              そのため、どの取引先に相談すればいいのか分からない事が多々あり得意先に迷惑をかける事がありました。
              <label class="work-history-btn2" for="hidden3"></label>
                <div class = "work-history-hidden-text2">
                  　そこで、一目瞭然分かるようににリスト化して集約しました。
                  結果、仕事を効率よくこなす事ができるようになり納期を短縮する事ができました。
                  その功績により得意先より大型コンプレッサの受注や大型機械の受注にも繋げることができ、
                  合計約1億円の売上を計上することができました。
                </div>
            </div>


            <!--職歴2 写真-->
            <div class="d-flex col-12 mt-3 justify-content-center">
              <div class="hoisuto col-6">
                <img src="{{ asset('/images/hoisuto.jpg') }}" class="hoisuto-image img-thumbnail img-fluid mt-1"  alt="日本ホイスト">
                <p class="hoisuto-text1 text-black">合計13台の注文を頂いた</p>
                <p class="hoisuto-text2 text-black">天井クレーン</p>
              </div>

              <div class="compressor col-6">
                <img src="{{ asset('/images/compressor.jpg') }}" class="compressor-image img-thumbnail img-fluid mt-1 mx-auto "  alt="アネスト岩田">
                <p class="compressor-text text-black">1台 約200万円する コンプレッサ</p>
              </div>
            </div>


          </div>
        </div>
      </div>


      <!-- 製作物 -->
      <div class="row no-gutters">
        <div class="card mt-5 mx-auto col-10">
          <div class="h2 card-header text-center back-color-gradient">
            <h3 id="products" class="mb-0">製作物</h3>
          </div>
        </div>

        <div class="row no-gutters justify-content-around bg-white border col-10 mx-auto">
          <div class="card-body p-0 d-flex justify-content-around">

            <!-- Study-Of-PostSiteの紹介文-->
            <div class="col-sm-5 p-0 mt-3">
              <ul id="products-list" class="text-center">
                <li>
                  <a href="http://study-of-postsite.com/" class="text-decoration-none">
                    <h2 class="text-center">Study-Of-PostSite</h2>
                  </a>
                </li>

                <li>
                  <a href="#" class="text-decoration-none">
                    <img src="{{ asset('/images/study-of-postsite.jpg') }}" class="study-of-postsite d-block mx-auto">
                  </a>
                </li>
              </ul>

              <p class="card-text text-left ">
                　CRUD機能が実装されている投稿サイトになります。使用言語はPHP フレームワークはlaravelになります。
                バリデーションのエラーも出るようになっております。
                しかし、投稿の画面で「選択して下さい」というところのバリデーションが未実装になります。現在、修正中です。
                今後はお問い合わせフォーム、管理者ログイン等々を実装する予定です。
                将来として、自分が作成したい投稿サイトがありますのでこの製作物から応用して作成することになります。
                SEO対策としてレスポンシブサイズに対応しております。(iPhoneでの閲覧も可能です。)
                <br>
                <p class="text-left font-weight-bold">※採用担当者様に現在はすぐにアクセスし利用いただけるようにログイン機能の実行を解除しています</p>
              </p>
            </div>

            <!-- Online Reviewsの紹介文-->
            <div class="col-sm-5 p-0 mt-3">
              <ul id="products-list" class="text-center">
                <li>
                  <a href="#" class="text-decoration-none">
                    <h2 class="text-center">Hospital Reviews</h2>
                  </a>
                </li>

                <li><a href="#" class="text-decoration-none">
                  <img src="{{ asset('/images/hospital-reviews.jpg') }}" class="hospital-reviews d-block mx-auto">
                  </a>
                </li>
              </ul>

              <p class="card-text text-left ">
                　病院の口コミが投稿、閲覧ができる様に作成したのがHospital Reviewsになります。
                こちらもPHPとフレームワーク laravelを使用しています。
                実は、こちらを最初に作成していましたが初めてのPHPの製作物だったので中々実装ができていないところが多々あります。<br>
                　その失敗とエラーを解決したことにより、Study-Of-PostSiteがすんなりと実装ができました。
                現在、詳細ページを見るために実装していますが、Undefined variable: reviewsという変数が渡せていないというエラーが出ています。
                これが現状、解決できない状態で製作が止まっています。Study-Of-PostSiteの作成に専念している為、HTMLとCSSは整っていない状態です。
              </p>
            </div>

          </div>
        </div>
      </div>


      <!-- プログラミングスキルと今後の学習-->
      <div class="row no-gutters">
        <div class="card mt-5 mx-auto col-md-10 md-offset-2">
          <div class="h2 card-header text-left back-color-gradient">
            <h3 id="skill" class="mb-0 text-center">プログラミングスキルと<br class="skill-new-line">今後の学習</h3>
          </div>
          <div class="mt-3 p-2 mb-2 h4 bg-primary text-center text-white mx-auto" style="width: 290px;">【プログラミングスキル】</div>


          <!-- HTML CSS JS -->
          <div class="card-body p-0 d-flex justify-content-around">
            <div class="col-sm-5 p-0 mt-3">
              <ul id="skill-list" class="text-center">
                <img src="{{ asset('/images/html-css.png') }}" class="html-css-icon d-block mx-auto">
                <img src="{{ asset('/images/star4.jpg') }}" class="star-4 d-block mx-auto" alt="星４">
              </ul>
              <p>
                　基本的なコーディングには問題はないと思います。
                また、SEO対策に必要なレスポンシブサイズにも対応できます。
                製作物 Study-Of-PostSiteで実装済です。
              </p>
            </div>

            <div class="col-sm-5 p-0 mt-3">
              <ul id="skill-list" class="text-center">
                <img src="{{ asset('/images/js.png') }}" class="html-css-icon d-block mx-auto">
                <img src="{{ asset('/images/star2.jpg') }}" class="star-2 d-block mx-auto" alt="星2">
              </ul>
              <p>
                　簡単なアニメーションは作成できますががまだまだ勉強不足です。
                特に非同期通信はまだよく分かっていないのが現状です。
                Udemyにて他のアニメーションにも勉強しています。
              </p>
            </div>
          </div>


          <!-- PHP RUBY -->
          <div class="card-body d-flex justify-content-around p-0">
            <div class="col-sm-5 p-0 mt-3">
              <ul id="skill-list" class="text-center">
                <img src="{{ asset('/images/php.png') }}" class="php-icon d-block mx-auto">
                <img src="{{ asset('/images/star3.jpg') }}" class="star-3 d-block mx-auto" alt="星3">
              </ul>
              <p>
              　CRUD機能を使用した投稿サイトは作成できます。
              現在、オブジェクト思考で作成する機能を実装する為勉強しています。
              </p>
            </div>

            <div class="col-sm-5 p-0 mt-3">
              <ul id="skill-list" class="text-center">
                <img src="{{ asset('/images/ruby.png') }}" class="ruby-icon d-block mx-auto">
                <img src="{{ asset('/images/star3.jpg') }}" class="star-4 d-block mx-auto" alt="星４">
              </ul>
              <p>
                　こちらも簡単なCRUD機能を使用した投稿サイトは作成できます。
                現在、関西に転職したい為求人数が多いPHPを中心に勉強をしています。
              </p>
            </div>
          </div>


          <!-- MYSQL AWS -->
          <div class="card-body d-flex justify-content-around p-0">
            <div class="col-sm-5 p-0 mt-3">
              <ul id="skill-list" class="text-center">
                <img src="{{ asset('/images/mysql.png') }}" class="mysql-icon d-block mx-auto">
                <img src="{{ asset('/images/star3.jpg') }}" class="star-3 d-block mx-auto" alt="星3">
              </ul>
              <p>　簡単なデータの抽出はできます。
                また、インターネットで問題集がありますので複雑な条件を使ってできる様に勉強しています。
              </p>
            </div>

            <div class="col-sm-5 p-0 mt-3">
              <ul id="skill-list" class="text-center">
                <img src="{{ asset('/images/aws.png') }}" class="aws-icon d-block mx-auto">
                <img src="{{ asset('/images/star3.jpg') }}" class="star-3 d-block mx-auto" alt="星3">
              </ul>
              <p>
                　web系企業ではクラウドはAWSが主流になっていますのでAWSを用いて本番環境を構築しました。
                こちらは、Udemyを参考にして構築しました。今後はAWS認定資格を受験する為に勉強し続けます。
              </p>
            </div>
          </div>


          <!--今後の学習-->
          <div class="mt-3 p-2 mb-2 h4 text-center bg-primary text-white mx-auto" style="width:200px;">【今後の学習】</div>

          <ul id="it-pass" class="h4 font-weight-bold mt-2">ITパスポート
            <li class="h6 mt-1">エンジニアとして必要な知識を勉強したいのでITパスポートを今年中に受験します。</li>
          </ul>

          <ul id="aws" class="h4 font-weight-bold mt-2">AWS認定資格
            <li class="h6 mt-1">デプロイはAWSを使用していますので先ずは基礎中の基礎である AWS 認定クラウドプラクティショナーを受験します。</li>
          </ul>

          <ul id="basic-information" class="h4 font-weight-bold mt-2">基本情報技術者試験
            <li class="h6 mt-1">上記の二つの資格を取得したら基本情報技術者試験に挑戦してみたいです。</li>
          </ul>


        </div>
      </div>


      <!-- エンジニアを目指す理由 -->
      <div class="row no-gutters">
        <div class="card mt-5 mx-auto  col-md-9 md-offset-3">
          <div class="h2 card-header text-left back-color-gradient">
            <h3 id="dream" class="mb-0">エニジニアを目指す理由</h3>
          </div>

          <div class="card-body">
            <p class="font-weight-bold text-center h4">
              世の中の不便を解消できるエンジニアになろうと挑戦を決意
            </p>

            <div class="dream-box">
              <input id="hidden5" class="dream-top-text" type="checkbox">
                　個人的に不便を感じた経験を通じてこの決意に至るようになりました。
                実は、私たち夫婦も２年の不妊治療の末、子どもを授かりました。<br>
                　2020年度の日本の出生数は、87万2683人と、昨年に続き過去最低となっています。不妊治療という選択肢も一般的になり、
                妊娠で悩む夫婦の間で利用したいと考える人も増えています。
                私達は近くのクリニックに通いながら不妊治療を続けていましたが、偶然、妻の上司から勧められたクリニックに転院したおかげで、
                転院後わずか３か月で妊娠することができました。

              <label class="dream-btn" for="hidden5"></label>
              <div class="dream-hidden-text">
                　現在、不妊治療のクリニックに関する情報はとても少なく、インターネットにも医者の研究発表、
                治療による出生数しか掲載されていないため、どのクリニックがよいのか判断することが難しくなっています。
                　このように私自身の経験も含めて不便な事を少しでも効率良くできる様にするにはどうしたら良いのかと思いました。
                偶然、前職でも注文履歴の管理や見積書作成を作成するwebアプリケーションが「JAVA」という言語で組み込まれていることが分かりました。
                詳しく調べていくうちに、こうした世の中の不便を解消していけると考えるようになりました。
                プログラミング言語を学ぶことにより効率よく作業ができる様になるにはエンジニアしかないと思いました。
              </div>
            </div>

            <!--前回提出した内容 <div class="dream-box">
              <input id="hidden5" class="dream-top-text" type="checkbox">
              　2020年度の日本の出生数は、87万2683人と、昨年に続き過去最低となっています。
              女性は高齢になるにつれ不妊になる可能性が上がるため、昨今の晩婚化により、子どもを望んでもすぐに授かることができず、
              不妊治療をする夫婦が増えています。<br>
              　実は、私たち夫婦も２年の不妊治療の末、子どもを授かりました。近くのクリニックに通いながら不妊治療を続けていましたが、
              偶然、妻の上司から勧められたクリニックに転院したおかげで、転院後わずか３か月で妊娠することができました。
              もし紹介がなければ、今でも苦しい毎日を過ごしていたのではないかと思います。
              この経験から、私は少しでも多くの夫婦に、1日でも早く自分に合ったクリニックに出会ってほしいという思いを持っています。

              <label class="dream-btn" for="hidden5"></label>
              <div class="dream-hidden-text">
                　前述の通り女性は高齢になるほど妊娠しにくくなるため、少しでも早く適切な不妊治療を受けなければ、
                さらに妊娠できる可能性が下がってしまいます。しかし、現在、不妊治療のクリニックに関する情報はとても少なく、
                インターネットにも医者の研究発表、治療による出生数しか掲載されていないため、
                どのクリニックがよいのか判断することが難しくなっています。<br>
                　そのため、自分が通っているクリニックの治療が自分に合っているのかどうか分からず、
                合わない治療を何年も続けてしまうこともあります。また、不妊治療は現在、保険適用外のため医療費が桁違いに高いため、
                治療を続けることで経済的に苦しい思いをしている夫婦も少なくありません。<br>
                　そこで私は、不妊治療専門のSNSを作成してクリニックの情報を共有できれば、子どもの笑顔が見られる夫婦が少しでも増えるのでは?
                と思うようになりました。そして、そのようなSNSを作れるようになるために、プログラミングを勉強して、エンジニアになろうと決意しました。
                今後、日本の課題として人口減少を防ぐ政策が増えていく可能性は高いです。現に日本国政府では、不妊治療を保険適用にする動きが出ています。
                その法案が可決したら、私が作成したSNSが普及すると思います。少しでも多く、
                子どもの笑顔が見られる夫婦が増えるようにプログラミング勉強を続けています。
              </div>
            </div> -->

          </div>

        </div>
      </div>


      <!-- 自己PR -->
      <div class="row no-gutters">
        <div class="card mt-5 mx-auto  col-md-9 md-offset-3">
          <div class="h2 card-header text-left back-color-gradient">
            <h3 id="pr" class="mb-0">自己PR</h3>
          </div>

          <div class="card-body">
            <p class="card-text left mt-3">
              <p class="font-weight-bold text-center mt-3 h4">
                  柔軟な発想で課題を解決<br>
                コロナ不況による<br class="pr-new-line">売上低迷を打破
              </p>
            </p>

            <div class="pr-box">
              <input id="hidden4" class="pr-top-text" type="checkbox">
              　前職の株式会社サカノシタでは機械工具のルート営業をしています。新型コロナにより設備投資がなくなり売上が低迷しました。
                そこで当時マスク無しで仕事ができず、生産活動を止めざる負えないお客様が多くいらっしゃいましたので、
                さっそく上司に相談しました。
              <label class="pr-btn" for="hidden4"></label>
              <div class="pr-hidden-text">
                提案として中国でマスクの生産が急ピッチという情報を捉えたので中国にある営業所に連絡しました。
                すると、1社がその案件に乗り出しマスクを生産することになりました。
                私が中心となって中国の営業所と連携し、価格・製造量・輸入のタイミングなど細かく調整を行い、
                企画から約1ヶ月でマスクを2万枚を日本に輸入することができました。<br>
                　その結果、お客様にマスクを販売する事ができ大手企業様を中心に注文が殺到し、1日でマスクを完売させることができました。
                更に、マスク不足を解消でき、会社でも3600万円の売上を上げることができました。<br>
                　この功績により京都市と南丹市から災害時における物資供給を優先的に行うことができる協定を結ぶことにも至りました。
                入社後には、さまざまな観点からどのように課題を解決できるか検討し、社内やクライアントの課題解決に貢献したいと思います。
              </div>
            </div>


            <!-- 自己PR 写真 -->
            <div class="d-flex col-12  mt-3 justify-content-center">
              <div class="kyoto-box col-6">
                <p class="mb-0 text-center font-weight-bold">京都市のホームページより</p>
                <img src="{{ asset('/images/kyoto-city.jpg') }}" class="kyoto-image img-thumbnail img-fluid mt-1"  alt="京都市のHP">
              </div>

              <div class="nantan-box col-6">
                <p class="mb-0 text-center font-weight-bold">南丹市のホームページより</p>
                <img src="{{ asset('/images/nantan-city.jpg') }}" class="nantan-image img-thumbnail img-fluid mt-1 mx-auto "  alt="南丹市からの表彰">
              </div>
            </div>

          </div>
        </div>
      </div>


      <!--資格 特技-->
      <div class="row no-gutters">
        <div class="card mt-5 mx-auto col-md-9 md-offset-3">
          <div class="h2 card-header text-left back-color-gradient">
            <h3 id="requirement" class="mb-0 text-center ">資格 特技</h3>
          </div>
          <div class="card-body d-flex justify-content-around p-0 mt-3">
            <div class="col-sm-5">
              <ul id="ul-requirement" class="text-center">
                <h3 class="font-weight-bold">資格一覧</h3>
                <li>販売士検定3級</li>
                <li>ファイナンシャルプランニング技能士3級</li>
                <li>マイクロソフト認定資格 Word スペシャリスト</li>
                <li>マイクロソフト認定資格 Excelスペシャリスト</li>
                <li>普通自動車免許第一種</li>
              </ul>
            </div>

            <div class="col-sm-5">
              <ul id="ul-special-skill" class="text-center">
                <h3 class="text-center font-weight-bold">特技一覧</h3>
                <li>ピアノ</li>
                <li>合気道</li>
                <li>魚裁き&魚料理</li>
              </ul>
            </div>
          </div>
        </div>
      </div>


      <!-- 最後に -->
      <div class="row no-gutters">
        <div class="card mt-5 mx-auto  col-md-9 md-offset-3">
          <div class="h2 card-header text-left back-color-gradient">
            <h3 id="last" class="mb-0">最後に</h3>
          </div>
          <div class="card-body">
            <p class="card-text left">
              　ここまで読んでいただきありがとうございます。<br>
              初学者でもありますので新しく勉強したことや理解したことは
              <a href="https://qiita.com/yutarou" class="text-decoration-none">Qiita</a>
              にて投稿しています!<br>
              また、草を生やす為にGitHubで履歴を残すように毎日頑張っています。<br>
              是非<a href="https://github.com/Deguta" class="text-decoration-none">GitHub</a>も読んで頂いたらと思います。<br>
            </p>
            <ul class="list-inline mb-0 d-flex justify-content-center">
              <li>
                <a href="https://qiita.com/yutarou">
                  <div class="last-brand-qiita d-block"></div>
                </a>
              </li>
              <li>
                <a href="https://github.com/Deguta">
                  <div class="last-brand-github d-block"></div>
                </a>
              </li>
            </ul>

          </div>
        </div>
      </div>

      <!-- お問い合わせ -->
      <footer class="row no-gutters">
        <div class="card mt-5 mx-auto  col-md-9 md-offset-3">
          <div class="h2 card-header text-center bg-dark">
            <h3 id="contact" class="mb-0 text-white">お問い合わせ</h3>
          </div>

          <div class="card-body text-center">
              <h4>メールまたはツイッターDMでご連絡ください。</h4>
          </div>

          <ul class="list-inline mb-5 d-flex justify-content-center">
            <li>
              <a href="{{ route('contact.index') }}">
                <div class="navbar-brand-gmail"></div>
              </a>
            </li>
            <li>
              <a href="https://twitter.com/Fisher21663470">
                <div class="navbar-brand-twitter d-block m-auto"></div>
              </a>
            </li>
          </ul>

        </div>
      </footer>

    </div>
  </body>
</html>