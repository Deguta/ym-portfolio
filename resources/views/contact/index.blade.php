@extends('layouts.app')
 
@section('content')
<form method="POST" action="{{ route('contact.confirm') }}"> //入力に問題が無かったら次のコントローラーに送る際のルーティングを設定
    @csrf //入力するフォームにはcrsf対策をする。無ければ419というエラーが出る。

    <label>メールアドレス</label>　
    <input // inputは入力ができるフォーム
        name="email"
        value="{{ old('email') }}"　//ヘルパーメソッド old バリデーションでエラーが出た場合入力していた項目の初期化を防ぐため。
        type="text">
    @if ($errors->has('email')) //hasは入力値の存在チェック
        <p class="error-message">{{ $errors->first('email') }}</p> //firstはクエリビルダーのことで無ければ空白というエラーを出す?
    @endif

    <label>タイトル</label>
    <input
        name="title"
        value="{{ old('title') }}"
        type="text">
    @if ($errors->has('title')) //入力値の存在チェック
        <p class="error-message">{{ $errors->first('title') }}</p>
    @endif


    <label>お問い合わせ内容</label>
    <textarea name="body">{{ old('body') }}</textarea>
    @if ($errors->has('body'))
        <p class="error-message">{{ $errors->first('body') }}</p>
    @endif

    <button type="submit">
        入力内容確認
    </button>
</form>
@endsection
