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
        @foreach ($reviews as $review)
            <p class="title-form">
                <p class="title">タイトル
                {{ $review->title}}
                <p/>
            </p>
            <p class="title-form">
                <p class="title">投稿内容
                {{ $review->text}}
                <p/>
            </p>
        @endforeach

        <form method="POST" action="{{ route('online_reviews.store')}}">
            @csrf
            <label for="title">タイトル</label>
                <input id="title" name="title" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" value="{{ old('title') }}" type="text">
                    @if ($errors->has('title'))
                            <div class="invalid-feedback">
                                    {{ $errors->first('title') }}
                            </div>
                    @endif

                <textarea id="text" name="text" class="form-control {{ $errors->has('text') ? 'is-invalid' : '' }}">value="{{ old('text') }}"</textarea>
                    @if ($errors->has('text'))
                        <div class="invalid-feedback">
                            {{ $errors->first('text') }}
                        </div>
                    @endif
                <div class="form-btn">
                    <a class="btn btn-secondary" href="{{ route('online_reviews.create') }}">キャンセル</a>
                    <a href="{{ route('online_reviews.hospital_list') }}">トップページに戻る</a>
                    <button type="submit" class="btn btn-primary">投稿する</button>
                </div>
        </form>
    </div>
<footer></footer>
</html>













