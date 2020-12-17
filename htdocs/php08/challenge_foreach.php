<?php

$class = ['ガリ勉' => '鈴木', '委員長' => '佐藤', 'セレブ' => '斎藤', 'メガネ' => '伊藤', '女神' => '杉内'];
?>
<!DOCTYPE html>
<html lang="ja">
<head>
   <meta charset="UTF-8">
   <title>kadai</title>
</head>
<body>

<form action="#">
<?php
// 都道府県の配列をループさせる
foreach ($class as $key => $namae) {
?>
           <p><?php print $namae; ?>さんのあだ名は<?php print $key;?></p>
<?php
}
?>
       </select>
   </form>
</body>
</html>