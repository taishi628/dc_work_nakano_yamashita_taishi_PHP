<?php
$jyanken = '';
    //変数初期化
$gucyokipa = array();
    //配列を変数に代入
$kettuka;
    //上記乱数と自分の選択と戦わせた結果

    if(isset($_POST['jyanken']) === TRUE){
    //じゃんけん変数の値が帰ってきている時に反映する
    $gucyokipa = array('グー','チョキ','パー');
    //配列を整備
   $jyanken  = htmlspecialchars($_POST['jyanken'], ENT_QUOTES, 'UTF-8');
   //じゃんけん変数を”’関係なくUTFで表示
   $rand =　array_rand($jyanken);
   //配列から乱数的に値を取り出す
   
   
   if ($jyanken === 'グー' && $rand === 'チョキ') {//勝負の結果を反映するIF文
        $kettuka = 'Win!!';//グー基準以下勝ちの定義
    }elseif ($jyanken === 'チョキ' && $rand === 'パー') {
        $kettuka = 'Win!!';
    }elseif ($jyanken === 'パー' && $rand === 'グー') {
        $kettuka = 'Win!!';
    }elseif ($jyanken === 'チョキ' && $rand === 'パー') {
        $kettuka = 'Win!!';
        //以下引き分け
    }elseif ($jyanken === 'グー' && $rand === 'グー') {
        $kettuka = 'draw';
    }elseif ($jyanken === 'チョキ' && $rand === 'チョキ') {
        $kettuka = 'draw';
    }elseif ($jyanken === 'パー' && $rand === 'パー') {
        $kettuka = 'draw';
        //以下負け
    }elseif ($jyanken === 'グー' && $rand === 'パー') {
        $kettuka = 'lose';
    }elseif ($jyanken === 'パー' && $rand === 'チョキ') {
        $kettuka = 'lose';
    }elseif ($jyanken === 'チョキ' && $rand === 'グー') {
        $kettuka = 'lose';
    }
}
   ?>
<!DOCTYPE html>
<html lang="ja">
<head>
   <meta charset="UTF-8">
   <title>課題7-9</title>
</head>
<body>
   <h1>じゃんけんするやつ</h1>
   
    <p>自分：<?php print $jyanken;?></p>
    <p>相手：<?php print $rand;?></p>
    <p>結果：<?php print $kettuka;?></p>
  <form method="post">
     <label><input type="radio" name="jyanken" value="グー"<?php if ($gender === 'グー') { print 'checked'; }?>>グー</label>
     <label><input type="radio" name="jyanken" value="チョキ"<?php if ($gender === 'チョキ') { print 'checked'; }?>>チョキ</label>
     <label><input type="radio" name="jyanken" value="パー"<?php if ($gender === 'パー') { print 'checked'; }?>>パー</label>
     <label><input type="submit" value="勝負!!"> </label>
   </form>
</body>
</html>