@extends('layouts.app')
 
@section('content')
{{--  入力に問題が無かったら次のコントローラーに送る際のルーティングを設定  --}}
<form method="POST" action="{{ route('contact.confirm') }}">
{{--  入力するフォームにはcrsf対策をする。無ければ419というエラーが出る  --}}
  @csrf
  
  <div class="container">
    <div class="panel-default  w-75  mx-auto card mt-5">
      <div class="panel-heading  h2 p-3 text-center bg-primary text-white">お問い合わせフォーム</div>
      <div class="panel-body">
          <!-- //hasは入力値の存在チェック firstはクエリビルダーのことで無ければ空白というエラーを出す-->
          <div class="form-group">
            <div class="my-3 mx-auto col-md-7 col-md-offset-5">
              <label for="inputTitle">メールアドレス</label>        
              <input type="text" class="form-control"  placeholder="メールアドレスを入力して下さい" name="email" value="{{ old('email') }}">
                @if ($errors->has('email')) //hasは入力値の存在チェック
                <p class="error-message">{{ $errors->first('email') }}</p> 
                @endif
            </div>
          </div>

        <div class="form-group">
          <div class="my-3 mx-auto col-md-7 col-md-offset-5">
            <label for="inputTitle">タイトル</label>        
            <input type="text" class="form-control"  placeholder="タイトルを入力して下さい" name="title" value="{{ old('title') }}">
              @if ($errors->has('title')) //hasは入力値の存在チェック
              <p class="error-message">{{ $errors->first('title') }}</p> //firstはクエリビルダーのことで無ければ空白というエラーを出す
              @endif
          </div>
        </div>

        <div class="form-group">
          <div class="my-3 mx-auto col-md-7 col-md-offset-5">
            <label for="inputTitle">本文入力</label>        
            <textarea rows="7" name="body" class="form-control mb-4"  placeholder="本文を入力して下さい">{{ old('body') }}</textarea>
            @if ($errors->has('body'))
            <p class="error-message">{{ $errors->first('body') }}</p>
            @endif
              <div class="form-group row  justify-content-around">
                  <input type="submit" class="btn bg-primary text-white  btn-lg" id="page_back" value="投稿内容を送信" />
                  <input type="reset" class="btn bg-danger text-white" value="リセット" />
              </div>
        
        
      </div>
    </div>
  </div>
  

  </div>


</form>
@endsection
