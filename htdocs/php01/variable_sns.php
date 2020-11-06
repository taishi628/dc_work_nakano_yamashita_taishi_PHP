<?php
    $name = 'ドナルド・トランプ';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>変数の使用例</title>
    <style>
        body{ background-color:#ccc;}  
        h1{ color:#696969}
        a{text-decoration: none;
            color:#778899;
        }
        a:hover{color:#5f9ea0}
        li{list-style:none;}
    </style>
</head>
 
<body>
    <h1>変数の使用例</h1>
    <p>ようこそ<?php print $name; ?>さん。</p>
    <ul>
        <li><a href="https://twitter.com/potus"><?php print $name; ?>さんのマイページを見る</a></li>
    </ul>
</body>
</html>