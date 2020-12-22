<!DOCTYPE html>
<html lang="ja">
<head>
   <meta charset="UTF-8">
   <title>FizzBuzz問題</title>
</head>
<body>
<?php
    for($i = 1; $i <= 100; $i++){
        if (($i%3 === 0) && ($i%5 === 0)){//３かつ５の倍数
        <p>FizzBuzz</p>
    <?php }
    <?php } elseif($i%3 === 0 ) {//それ以外で３の倍数
      <p>Fizz</p>
    <?php }elseif ($i%5 === 0){//それ以外で５の倍数
     <p>Buzz</p>
    <?php } else {
        <p><?php echo $i ?></p>
<?php }?>
</body>
</html>