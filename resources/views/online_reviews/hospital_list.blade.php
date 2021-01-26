<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>YM-PortFolio</title>
    <link rel="stylesheet" href="{{ asset('css/online_reviews/hospital_list.css') }}">
    <link href="{{asset('/assets/css/reset.css')}}" rel="stylesheet">
</head>
    <body>
        <div class="wrapper">
          {{--  検索機能  --}}
          <header>
            <div class="col-sm-4" style="padding:20px 0; padding-left:0px;">
              <form class="form-inline" action="{{url('/crud')}}">
                <div class="form-group">
                <input type="text" name="keyword"  class="form-control" placeholder="病院名を検索して下さい">
                </div>
                <input type="submit" value="検索" class="btn btn-info">
              </form>
            </div>
          </header>
          {{--  検索機能以上  --}}

          <div class="main">病院一覧 (??件)</div>
            <div class="content">
              <a href="{{ route('online_reviews.create') }}">A病院の詳細とコメント投稿はこちら</a>
            </div>
        </div>
    </body>
</html>