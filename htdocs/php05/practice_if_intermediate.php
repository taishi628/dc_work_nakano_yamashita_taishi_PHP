
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>課題IF（中級）</title>
    <style type="text/css">
        .em_red {
            color: #FF0000;
            font-size:50px;
        }
        .em_blue{
            color:#0000ff;
            font-size:50px;
        }
        .em_secound{
            color:#800000;
        }
    </style>
</head>
<body>

<pre>
<?php
 
// 0〜2のランダムな数値を2つ取得し、それぞれ変数$rand1と$rand2へ代入
$secound = date("s");
 
// ランダムな数値$rand1と$rand2をそれぞれ表示?>
<h1 class="em_secound">
<?php print 'secound: ' .$secound . "\n"; 

 
// $rand1と$rand2のどちらのほうが大きいか比較し、結果を表示?></h1>


 <?php 
 if($secound === '00'){?>
     <p class="em_red">ジャストタイム<p>
<?php } else if ($secound === '11' || $secound === '22' || $secound === '33'|| $secound === '44'|| $secound === '55' ){ ?>
     <p class="em_red">ぞろ目やねん</p>
<?php } else{ ?>
     <p class="em_blue">外れ</p>
<?php } ?>

 

</pre>

</body>
</html>