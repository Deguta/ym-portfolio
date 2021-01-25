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
          <header>
            <a href="{{ route('online_reviews.create') }}">投稿ページはこちら</a>
          </header>

          <div class="main">
            <div class="post-name">
              @if($names)

                @foreach ($names as $name)
                  {{ $name->name}}
                @endforeach
              @endunless
 

              <div class="form-text">
                @foreach ($reviews as $review)
                <p class="title-form">本文
                  <p class="title">
                    {{ $review->title}}
                  <p/>
                </p>
                  
                <p class="text">投稿内容{{ $review->text}}</p>
                @endforeach
              </div>
            </div>
          </div>
            </body>
        </div>
    </body>
</html>



