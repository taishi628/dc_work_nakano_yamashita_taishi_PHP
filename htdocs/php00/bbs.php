<!doctype html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>ひとこと掲示板</title>
    </head>
    <body>
        <h1>ひとこと掲示板</h1>
<?php if (count($error) > 0) { ?>
    <ul>
    <?php foreach($error as $value) { ?>
        <li><?php print $value; ?></li>
    <?php } ?>
    </ul>
<?php } ?>
        <form method="post">
            名前:<input type="text" name="username">
            ひとこと:<input type="text" name="comment">
            <input type="submit" value="送信">
        </form>
        <ul>
<?php foreach ($data as $value) { ?>
            <li><?php print $value; ?></li>
<?php } ?>
        </ul>
    </body>
</html>