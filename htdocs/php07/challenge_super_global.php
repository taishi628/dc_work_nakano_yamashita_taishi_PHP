<!DOCTYPE html>
<?php
// 変数初期化
$gender = '';
$my_name = '';


if (isset($_POST['gender']) === TRUE) {　//POSTで'ジェンダー'を返す
   $gender = htmlspecialchars($_POST['gender'], ENT_QUOTES, 'UTF-8'); //ジェンダーを"''区別なくHTMLエンテイに変換
}
?>



<html lang="ja">
<head>
   <meta charset="UTF-8">
   <title>課題7-7</title>
</head>
<body>
<?php    if ($gender === 'man' || $gender === 'wonam') {?>
   <p> あなたの性別は「<?php print $gender; ?>」です</p>
<?php } ?>

<ul>
<li>お名前：<input id="my_name" type="text" name="my_name" value=""></li>
<li>性別：<input type="radio" name="gender" value="man" <?php if ($gender === 'man') { print 'checked'; } ?>>男
<input type="radio" name="gender" value="woman"<?php if ($gender === 'woman') { print 'checked'; } ?>>女</li>
<li><input type="checkbox" name="mail" value="OK">お知らせメールを受け取る</li>
<li><input type="button" name="button" value="送信"></li>
</ul>

</html>