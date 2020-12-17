<?php
$i = 0;
$sum =1;
$hundred = 1000;
?>
<!DOCTYPE html>
<html lang="ja">
<head>
   <meta charset="UTF-8">
   <title>ループの使用例</title>
</head>
<body>

<?php
// 1900年〜現在の西暦までをループで処理する
while ($i <= $hundred) {
     $sum++;
    $i+=$sum;
   
?>
           <p>和：<?php print $sum; ?></p>
           <p>足された数：<?php print $i; ?></p>
<?php

}
?>
       </select>
   </form>
</body>
</html>