<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>YM-PortFolio</title>
    <link rel="stylesheet" href="{{ asset('css/online_reviews/hospital') }}">
    <link href="{{asset('/assets/css/reset.css')}}" rel="stylesheet">
</head>
<body>
<header>A病院の詳細</header>
    <div class="wrapper">

            {{ $user ->name}}
            {{ $review ->title}}
            {{ $review ->text }}
            {{ $gender }}
        <form method="GET" action="">
                @csrf

                <div class="form-btn">
                    <a class="btn btn-secondary" href="{{ route('online_reviews.create') }}">キャンセル</a>
                    <a href="{{ route('online_reviews.hospital_list') }}">病院一覧に戻る</a>
                    <a href="{{ route('portfolio.index') }}">トップページに戻る</a>
                    <button type="submit" class="btn btn-primary">変更する</button>
                </div>
        </form>
    </div>
</body>
<footer></footer>
</html>



{{--  変数確認用 @if(isset($message))
    <p>$message</p>
@else
    <p>メッセージは存在しません。</p>
@endif  --}}









