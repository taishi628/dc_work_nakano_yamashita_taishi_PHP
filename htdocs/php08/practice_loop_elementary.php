<?php
// 表の変数
$front = 0;
// 裏の変数
$back = 0;

if (isset($_POST['number'])) {
    $num = $_POST['number'];

    for($i = 1; $i <= $num; $i++) {
        $rand = rand(0, 1);
        if($rand === 0) {
            $front++;
        }else if($rand === 1) {
            $back++;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>コイントス</title>
</head>
<body>
    <article id="wrap">
        <section>
            <p>表: <?php if(isset($_POST['submit'])=== true) { print $front;} ?>回</p>
            <p>裏: <?php if(isset($_POST['submit'])=== true) { print $back;} ?>回</p>
        </section>
        <form method="post">
            <select name="number">
                <option value="">回数選択</option>
                <option name="10" value="10">10</option>
                <option name="100" value="100">100</option>
                <option name="1000" value="1000">1000</option>
            </select>回
            <button name="submit" type="submit">コイントス</button>
        </form>
    </article>
</body>
</html>