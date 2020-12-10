
<?php
// 変数初期化

//テキストボックスに名前を入力してPOSTで送信するページを作成し、
//入力されている場合は「ようこそ◯◯さん」
//入力されていない場合は「名前を入力してください」
//と表示するプログラムを作成してください。
//POSTでデータを送信するファイルと受信するファイルは、別々に作成してください。

$name = '';//変数初期化
if (isset($_POST['name']) === TRUE) {   //POSTで'ネーム'を返す
   $name  = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');//ネーム変数を"''区別なくHTMLエンテイに変換
?>
<!DOCTYPE html>
<html lang="ja">
<head>
   <meta charset="UTF-8">
   <title>課題７－８</title>
</head>
<body>
   <h1>名前がいきわたるやつ</h1>
<?php//formから文字列が渡ってきている場合はnameさん表示
   if (isset($_POST['name'])===true) {?>
    <p>ようこそ<?php print $name;?>さん</p>
<?php}else{ ?>
    <p>名前を入力してください</p>
<?php } ?><!-- 名前いれるやつ -->
   <form method="post">
    <label>お名前： <input id="name" type="text" name='name' value="<?php print  htmlspecialchars($name, ENT_QUOTES, "UTF-8"); ?>"></label><br>
   <label><input type="submit" name="button" value="送信"></label><br>
   </form>
</body>
</html>