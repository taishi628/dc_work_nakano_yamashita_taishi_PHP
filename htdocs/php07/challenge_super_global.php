<!DOCTYPE html>
<?php
// 変数初期化
$name = '';
$gender = '';

if (isset($_POST['name'])===true) {
   $name =  htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
}
?>
<?php
if (isset($_POST['gender']) === TRUE) {//POSTで'ジェンダー'を返す
   $gender = htmlspecialchars($_POST['gender'], ENT_QUOTES, 'UTF-8'); //ジェンダーを"''区別なくHTMLエンテイに変換
}
?>



<html lang="ja">
<head>
   <meta charset="UTF-8">
   <title>課題7-7</title>
</head>
<body>
<?php
   if(isset($_POST['name'])===true)
   {?>
   <p>ようこそ<?php print $name;?>さん</p>
   <?php } ?>
<?php
   //性別
   if ($gender === 'man' || $gender === 'woman') {?>
   <p> ここに選択した性別を表示：<?php print $gender; ?></p> 
<?php } ?>
<form method='post'>
お名前： <input type="text" name='name'> <br>
性別：<input type="radio" name='gender' value='man' <?php if ($gender === 'man'){ print 'checked'; }?>>男
<input type="radio" name='gender' value='woman'<?php if ($gender === 'woman'){ print 'checked'; }?>>女 <br>

<input type="submit" name="button" value="送信"><br>
</form>
</body>
</html>