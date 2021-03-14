<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>YM-PortFolio</title>
  <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
  <body>
    <div class="container">
      <!-- ナビゲーションバー -->
      <nav>
        <ul>
          <li><a href="#about-me" class="text-decoration-none" style="font-size:20px;">自己紹介</a></li>
          <li><a href="#carrer" class="text-decoration-none" style="font-size:20px;">経歴</a></li>
          <li><a href="#products" class="text-decoration-none" style="font-size:20px;">製作物</a></li>
          <li><a href="#skill" class="text-decoration-none" style="font-size:16px;">言語スキル <br>今後の学習</a></li>
          <li><a href="#requirement" class="text-decoration-none" style="font-size:18px;">資格・特技</a></li>
          <li><a href="#pr" class="text-decoration-none" style="font-size:20px;">自己PR</a></li>
          <li><a href="#dream"class="text-decoration-none">エニジニアを<br>目指す理由</a></li>
          <li><a href="#last" class="text-decoration-none" style="font-size:20px;">最後に</a></li>
          <li><a href="#contact" class="text-decoration-none" style="font-size:18px;">お問い合わせ</a></li>
        </ul>
      </nav>

      <!-- 自己紹介 -->
      <div class="row no-gutters">
        <div class="card mt-5 mx-auto  col-md-9 md-offset-3">
          <div class="h2 card-header text-left back-color-gradient ">
            <h3 id="about-me" class="mb-0">自己紹介</h3>
          </div>

          <img src="{{ asset('/images/top-image.jpg') }}" class="img-thumbnail col-md-10 md-offset-2 d-block mt-4 mx-auto"  alt="自己紹介写真">
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
        <div class="card mt-5 mx-auto  col-md-9 md-offset-3">
          <div class="h2 card-header text-left back-color-gradient">
            <id id="carrer" class="mb-0">経歴</id>
          </div>
          <div class="card-body">

            <!-- 学歴 -->
            <dt class="text-center"><div class="p-2 mb-2 h4 bg-primary text-white mx-auto" style="width: 200px;">【学歴】</div>
              <dd class="text-center font-weight-bold">2003年4月〜2006年3月 京都成章高等学校</dd>
              <dd class="text-center font-weight-bold">2006年4月〜2010年3月 近畿大学 経営学部 経営学科 ITビジネスコース</dd>
            </dt>

            <p class="font-weight-bold text-center mt-3 h4">
              ITの専攻を選び
              <br>部活動を通じて社会人に必要なことをたくさん経験した大学時代
            </p>

            <div class="school-career-box">
              <input id="hidden1" class="school-career-top-text" type="checkbox">
                　専攻ではITビジネスコースに入学しましたので基本的なマークアップ言語は勉強しました。
                ITビジネスコースに専攻した理由は、高校時代、ホームページを作成しました。
                インターネットで検索してそれを形にできるという面白みを勉強したので専攻として選択しました。
                <label class="school-career-btn border-primary" for="hidden1"></label>
              <div class="school-career-hidden-text">
                当時、私が実際担当したのが元 大阪市長 橋下徹さんにインタビューをさせて頂きました。
                所属事務所のアポ取り、記事チェックを行い、最後は新聞の発行の許可を貰うために大学の職員の打ち合わせを行いました。
                新聞を作るにはこのような工程が多く、その経験を沢山したのでお陰で社会人に必要な経験を学びました。<br>
                　また、大学祭実行委員会では、イベント企画を担当しました。特に大学祭では毎年、吉本芸人が漫才を披露する大きなイベントがあります。
                ミーティングでは吉本興業のマネージャーが来られますので必要なことを聞き出すことが大切です。
                どうしたらイベントがスムーズにできるのか何度も話し合い当日を迎えることができました。
                そのお陰で、お客様が安心・安全にイベントを楽しめることできたのが何よりの達成感でした。<br>
              </div>
            </div>

            <!-- 学歴 写真-->
            <div class="d-flex col-12 justify-content-center">
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
            <dt class="mt-5 text-center"><div class="p-2 mb-2 h4 bg-warning text-primary mx-auto" style="width: 200px;">【職歴1】</div>
              <dd class="text-center font-weight-bold">2010年4月〜2015年9月 株式会社近商ストア</dd>
            </dt>

            <p class="text-center font-weight-bold mb-0">[主な仕事]</p>
            <p class="text-center">近鉄沿線の街の活性化し豊かな暮らしを支えるため食品を中心とした商品を販売。</p>

            <p class="text-center font-weight-bold mb-0">[主な担当]</p>
            <p class="text-center" >水産の課長として任命され魚の加工・販売・接客を主とした仕事を6年半続けてきました。</p>

            <p class="text-center font-weight-bold mb-0">[成果]</p>
            <p class="text-center">2014年度 売上3億7800万円 予算達成率 105%　粗利 1800万</p>

            <p class="class = text-center font-weight-bold mb-0">[実績]</p>
            <p class="font-weight-bold text-center mt-1 h4">
              魚の食べ辛さを解消し<br>
              全店舗 水産の売上高&粗利 No1
            </p>

            <div class="work-history-box1">
              <input id="hidden2" class="work-history-top-text1" type="checkbox">
              2013年度の売上と粗利があまりにも酷く、どの様にしたら少しでも改善できるか相談をしました。
              その結果、魚の食べ辛さを解消しようという決断に至りました。
              <label class="work-history-btn1 border-warning" for="hidden2"></label>
              <div class = "work-history-hidden-text1">
                実際にお客様にアンケートを実施した結果、骨に刺さるのがダントツ1位でした。
                そこで私は魚の骨取りをして、なるべく食べやすい様に加工をして商品アピールをしました。
                また、切り身にタレ漬けをしてそのままフライパンで焼くことができるように
                食品メーカーにお願いしてタレを作ってもらうように依頼しました。その結果、お客様から好評を頂き見事売上をV字回復しました。<br>
                　売上としては伸びましたがその反面粗利があまりありませんでした。そこで、そのまま食べれて尚且つ粗利がしっかり取れるお造りに注目し
                夕方にお造りを大量に売ることを実施しました。他の競合店を差別化するために、ボリューム感を出すようにしました。
                その結果こちらも粗利が伸びこの二つの実績を出したことにより2014年度の売上と粗利は全店舗　　　No1になることができました。
              </div>
            </div>


            <!--職歴1 写真-->
            <div class="d-flex col-12 justify-content-center">
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
            <dt class="mt-5 text-center"><div class="p-2 mb-2 h4 bg-success text-primary mx-auto" style="width: 200px;">【職歴2】</div>
              <dd class="text-center font-weight-bold">2015年10月〜2020年12月 株式会社サカノシタ</dd>
            </dt>
            <p class="text-center font-weight-bold mb-0">[主な仕事]</p>
            <p class="text-center">モノづくりサポートをモットーに機械工具のルート営業。</p>

            <p class="text-center font-weight-bold mb-0">[主な担当]</p>
            <p class="text-center" >大阪府 枚方市エリアを中心としたメーカーに営業活動をしました。</p>

            <p class="text-center font-weight-bold mb-0">[成果]</p>
            <p class="text-center">2019年度 売上1億4000万円 粗利2100万円</p>

            <p class="class = text-center font-weight-bold mb-0">[実績]</p>
              <p class="font-weight-bold text-center mt-1 h4">
                昨年の12月には大型機械の受注を頂き１億円の売上達成<br>
                また、弊社の当月売上ランキング1位獲得
            </p>

            <div class="work-history-box2">
              <input id="hidden3" class="work-history-top-text2" type="checkbox">
              テキスト1
              <label class="work-history-btn2 border-warning" for="hidden3"></label>
                <div class = "work-history-hidden-text2">
                  実際にお客様にアンケートを実施した結果、骨に刺さるのがダントツ1位でした。
                  そこで私は魚の骨取りをして、なるべく食べやすい様に加工をして商品アピールをしました。
                  また、切り身にタレ漬けをしてそのままフライパンで焼くことができるように
                  食品メーカーにお願いしてタレを作ってもらうように依頼しました。その結果、お客様から好評を頂き見事売上をV字回復しました。<br>
                  　売上としては伸びましたがその反面粗利があまりありませんでした。そこで、そのまま食べれて尚且つ粗利がしっかり取れるお造りに注目し
                  夕方にお造りを大量に売ることを実施しました。他の競合店を差別化するために、ボリューム感を出すようにしました。
                  その結果こちらも粗利が伸びこの二つの実績を出したことにより2014年度の売上と粗利は全店舗　　　No1になることができました。
                  </div>
            </div>


            <!--職歴2 写真-->
            <div class="d-flex col-12 justify-content-center">
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

          </div>
        </div>
      </div>


      <!-- 製作物 -->
      <div class="row no-gutters">
        <div class="card mt-5 mx-auto  col-10">
          <div class="h2 card-header text-center back-color-gradient">
            <h3 id="products" class="mb-0">製作物</h3>
          </div>
        </div>

        <div class="row no-gutters justify-content-around bg-white border col-10 mx-auto">
          <div class=" col-sm-5">
            <div class="card-body ">
              <a href="#" class="text-decoration-none"><h2 class="text-center">Study-Of-PostSite</h2></a>
              <img src="{{ asset('/images/.jpg') }}" class="img-thumbnail col-md-5  d-block mt-4 mx-auto"  alt="自己紹介写真">
              <p class="card-text text-left ">
                採用者の皆様へ。<br>
                大変お忙しい中、お時間を割いて頂きありがとうございます！<br>
                兵庫県在住の南川 裕一(ミナミカワ ユウイチ)と申します。<br>
                サーバーサイドエンジニアを目指して大阪府 兵庫県 京都府を中心に転職活動をしております。<br>
              </p>
            </div>
          </div>

          <div class="col-sm-5">
            <div class="card-body ">
              <a href="#" class="text-decoration-none"><h2 class="text-center">制作物2</h2></a>
              <img src="{{ asset('/images/.jpg') }}" class="img-thumbnail col-md-5  d-block mt-4 mx-auto" alt="自己紹介写真">
              <p class="card-text text-left ">
                採用者の皆様へ。<br>
                大変お忙しい中、お時間を割いて頂きありがとうございます！<br>
                兵庫県在住の南川 裕一(ミナミカワ ユウイチ)と申します。<br>
                サーバーサイドエンジニアを目指して大阪府 兵庫県 京都府を中心に転職活動をしております。<br>
              </p>
            </div>
          </div>
        </div>
      </div>


      <!--言語スキルと今後の学習-->
      <div class="row no-gutters">
        <div class="card mt-5 mx-auto col-md-10 md-offset-2">
          <div class="h2 card-header text-left back-color-gradient">
            <h3 id="skill" class="mb-0 text-center">言語スキルと今後の学習</h3>
          </div>
          <div class="card-body d-flex justify-content-around p-0 mt-3">
            <div class="col-sm-5">
              <ul id="ul-requirement" class="text-center">
                <h3>資格一覧</h3>
                <li>販売士検定3級</li>
                <li>ファイナンシャルプランニング技能士3級</li>
                <li>マイクロソフト認定資格 Word スペシャリスト</li>
                <li>マイクロソフト認定資格 Excelスペシャリスト</li>
                <li>普通自動車免許第一種</li>
              </ul>
            </div>

            <div class="col-sm-5">
              <ul id="ul-special-skill" class="text-center">
                <h3 class="text-center">特技一覧</h3>
                <li>ピアノ</li>
                <li>合気道</li>
                <li>魚裁き&魚料理</li>
              </ul>
            </div>
          </div>
        </div>
      </div>


        <!--資格 特技-->
        <div class="row no-gutters">
          <div class="card mt-5 mx-auto col-md-9 md-offset-3">
            <div class="h2 card-header text-left back-color-gradient">
              <h3 id="requirement" class="mb-0 text-center">資格 特技</h3>
            </div>
            <div class="card-body d-flex justify-content-around p-0 mt-3">
              <div class="col-sm-6">
                <ul id="ul-requirement" class="text-center">
                  <h3>資格一覧</h3>
                  <li>販売士検定3級</li>
                  <li>ファイナンシャルプランニング技能士3級</li>
                  <li>マイクロソフト認定資格 Word スペシャリスト</li>
                  <li>マイクロソフト認定資格 Excelスペシャリスト</li>
                  <li>普通自動車免許第一種</li>
                </ul>
              </div>

              <div class="col-sm-4">
                <ul id="ul-special-skill" class="text-left">
                  <h3 class="text-left">特技一覧</h3>
                  <li>ピアノ</li>
                  <li>合気道</li>
                  <li>魚裁き&魚料理</li>
                </ul>
              </div>
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
                <p class="font-weight-bold text-center mt-3">
                    柔軟な発想で課題を解決<br>
                  コロナ不況による売上低迷を打破
                </p>
              </p>

              <div class="pr-box">
                <input id="hidden4" class="pr-top-text" type="checkbox">
                　前職では機械工具のルート営業をしています。新型コロナにより設備投資がなくなり売上が低迷しました。
                  そこで当時マスク無しで仕事ができず、生産活動を止めざる負えないお客様が多くいらっしゃいましたので、
                  さっそく上司へ提案をしました。
                <label class="pr-btn" for="hidden4"></label>
                <div class="pr-hidden-text">
                  提案として中国でマスクの生産が急ピッチという情報を捉えたので中国にある営業所の所長に連絡しました。
                  すると、1社がその案件に乗り出しマスクを生産することになりました。
                  私が中心となって中国の営業所と連携し、価格・製造量・輸入のタイミングなど細かく調整を行い、
                  企画から約1ヶ月でマスクを2万枚を日本に輸入することができました。<br>
                  　その結果、弊社のお客様にマスクを販売する事ができ大手企業様を中心に注文が殺到し、1日でマスクを完売させることができました。
                  更に、お客様のマスク不足を解消でき、会社でも3600万円の売上を上げることができました。<br>
                  　この功績により京都市と南丹市から災害時における物資供給を優先的に行うことができる協定を結部ことにも至りました。
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


        <!-- エンジニアを目指す理由 -->
        <div class="row no-gutters">
          <div class="card mt-5 mx-auto  col-md-9 md-offset-3">
            <div class="h2 card-header text-left back-color-gradient">
              <h3 id="dream" class="mb-0">エニジニアを目指す理由</h3>
            </div>

            <div class="card-body">
              <p class="font-weight-bold text-center">
                不妊治療専門のアプリを作って欲しいという妻の一言から
              </p>

            <p>
              　2020年8月に誕生した私の子供は不妊治療により産まれました。
            </p>
            </div>

          </div>
        </div>

        <div class="row no-gutters">
          <div class="card mt-5 mx-auto  col-md-9 md-offset-3">
            <div class="h2 card-header text-left back-color-gradient">
              <h3 id="last" class="mb-0">最後に</h3>
            </div>
            <div class="card-body">
              <p class="card-text left">
                ここまで読んでいただきありがとうございます。<br>
                初学者でもありますので新しく勉強したことや理解したことは
                <a href="https://qiita.com/yutarou">Qiita</a>
                にて投稿しています!<br>
                また、草を生やす為にGitHubで履歴を残すように毎日頑張っています。<br>
                是非<a href="https://github.com/Deguta">GitHub</a>も読んで頂いたらと思います。<br>
              </p>
              <ul class="list-inline mb-5 d-flex justify-content-center">
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
                <a href="{{ url('/contact/index') }}">
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
    </div>
  </body>
</html>