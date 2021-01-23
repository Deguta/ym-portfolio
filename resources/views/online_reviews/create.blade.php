<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>口コミ掲示板</title>
<style>


</style>
</head>
<body>
<h1>A病院の投稿ページ</h1>
<form method="post">
	<div>
		<label for="view_name">タイトル</label>
		<input id="view_name" type="text" name="view_name" value="">
	</div>
	<div>
		<label for="message">クチコミ</label>
		<textarea id="message" name="message"></textarea>
	</div>
	<input type="submit" name="btn_submit" value="書き込む">
</form>
<hr>
<section>
<!-- ここに投稿されたメッセージを表示 -->
</section>
</body>
</html>