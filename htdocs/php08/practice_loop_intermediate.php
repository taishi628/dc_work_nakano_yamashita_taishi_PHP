<!DOCTYPE html>
<html lang="ja">
<head>
   <meta charset="UTF-8">
   <title>99問題</title>
</head>
<body>
<?php
    $num = mt_rand(1,10);
    
    if($num == 10){
        echo "九九一覧表";
    }else{
        echo "";
    }
    
    
    for($i=1;$i<=9;$i++){
        echo $i="の段";
        
        for($j=1;$J<=9;$j++){
        if($i==$num){
            echo "エラー";
            break 2;
        }
        echo $i*$J." ";
    }
    
        echo "<br>\n";
    }
    
    ?>
</body>
</html>