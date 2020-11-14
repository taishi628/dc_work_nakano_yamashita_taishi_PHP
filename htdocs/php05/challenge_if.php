<?php
$dice = mt_rand(1, 6); // １〜１０の値をランダムに取得
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ifの使用例</title>
    <style type="text/css">
        .em_red {
            color: #FF0000;
        }
        .em_blue {
            color : #00608d;
        }
    </style>
</head>
<body>
    <h1>抽選システム</h1>
    <p>値は：<?php print $dice; ?></p>
<?php if ($dice % 2 == 0) { ?>
    <h2 class="em_red">奇数!!</h2>
<?php } else { ?>
    <h2 class="em_blue">偶数!!</h2>
<?php } ?>

<?php var_dump($dice); ?>
</body>
</html>