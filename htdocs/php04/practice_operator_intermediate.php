<?php
 
$apple = 100;
$grape = 150;
 
/* 以下に「648」と合計金額が表示されるよう課題処理を追加 */
$apple *= 3; 
$grape *= 2;
$total = $apple + $grape;
$tax = $total * 0.08;
$total += $tax;
echo $total;

?>