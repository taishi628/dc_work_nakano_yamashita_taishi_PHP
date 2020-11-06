<?php
// $valueの値を定義
$value = 55.5555;
 
// 小数切り捨て値の処理を記述
 
 
 
// 小数切り上げの処理を記述
 
 
// 小数四捨五入の処理を記述
 
 
// 小数第二位で四捨五入の処理を記述
 
 
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>3-7 課題(中級)</title>
</head>
<body>
    <p>元の値:<?php echo  $value; ?> </p>
    <p>小数切り捨て:<?php printf("%d", $value);
    ?> </p>
    <p>小数切り上げ: <?php printf("%.0f",$value);
    ?>
    </p>
    <p>小数四捨五入: 
    <?php printf("%.0f",round($value));?>&emsp;<?php echo number_format($value); ?></p>
    <p>小数第二位で四捨五入:<?php echo number_format($value,2); ?> </p>
</body>
</html>