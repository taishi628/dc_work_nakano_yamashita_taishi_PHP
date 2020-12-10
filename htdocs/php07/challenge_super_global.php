<!DOCTYPE html>
<?php
// 変数初期化
$name = '';
$gender = '';
$mail = '';

   if (isset($_POST['my_name'])===true) {
      $name =  htmlspecialchars($_POST['my_name'], ENT_QUOTES, 'UTF-8');
   }
   ?>
<?php
   if (isset($_POST['gender']) === TRUE) {//POSTで'ジェンダー'を返す
      $gender = htmlspecialchars($_POST['gender'], ENT_QUOTES, 'UTF-8'); //ジェンダーを"''区別なくHTMLエンテイに変換
   }
?>
<?php
   if (isset($_POST['mail']) === TRUE) {
      $mail= htmlspecialchars($_POST['mail'], ENT_QUOTES, 'UTF-8');
   }?>


<html lang="ja">
<head>
   <meta charset="UTF-8">
   <title>課題7-7</title>
</head>
<body>
<?php
   //名前
   if(isset($_POST['my_name'])===true)
   {?>
   <p>ようこそ<?php print $name;?>さん</p>
   <?php } ?>
<?php
   //性別
   if ($gender === 'man' || $gender === 'woman') {?>
   <p> ここに選択した性別を表示：<?php print $gender; ?></p> 
<?php } ?>

<?php
   //メール
   if(isset($_POST['mail'])===true){?>
   <p>お知らせメールを受け取る：<?php print $mail; ?></p>
<?php } ?>

<form method='post'>
<label>お名前： <input id="my_name" type="text" name='my_name' value="<?php print  htmlspecialchars($name, ENT_QUOTES, "UTF-8"); ?>"></label><br>
<label>性別：<input type="radio" name='gender' value='man' <?php if ($gender === 'man'){ print 'checked'; }?>>男
<input type="radio" name='gender' value='woman'<?php if ($gender === 'woman'){ print 'checked'; }?>>女</label><br>
<label>お知らせメールを受け取る：<input type="checkbox" name="mail" value="OK"<?php if ($mail === 'OK'){ print 'checked'; }?>></label><br>
<label><input type="submit" name="button" value="送信"></label><br>
</form>
</body>
</html>