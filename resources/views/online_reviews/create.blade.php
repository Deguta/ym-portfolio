<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>口コミ掲示板</title>
<style>


</style>
</head>
    <div class="container mt-4">
        <div class="border p-4">
            <h1 class="h5 mb-4">
                投稿の新規作成
            </h1>

            <form method="POST" action="{{ route('online_reviews.store')}}">
							@csrf
							<div class="form-group">
                    <div class="form-group">
											<label for="title">
													タイトル
											</label>
											<input
													id="title"
													name="title"
													class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}"
													value="{{ old('title') }}"
													type="text"
											>
											@if ($errors->has('title'))
													<div class="invalid-feedback">
															{{ $errors->first('title') }}
													</div>
											@endif
                    </div>

                        <textarea
                            id="text"
                            name="text"
                            class="form-control {{ $errors->has('text') ? 'is-invalid' : '' }}"
                            rows="4"
                        >{{ old('text') }}</textarea>
                        @if ($errors->has('text'))
                            <div class="invalid-feedback">
                                {{ $errors->first('text') }}
                            </div>
                        @endif
                    </div>
									<div class="mt-5">
											<a class="btn btn-secondary" href="{{ route('online_reviews.create') }}">
													キャンセル
											</a>
											
                      <a href="{{ route('online_reviews.index') }}">
													トップページに戻る
											</a>

											<button type="submit" class="btn btn-primary">
													投稿する
											</button>
									</div>
									
							</fieldset>
            </form>
        </div>
    </div>
</html>