<!DOCTYPE html>
<html lang="ja">
<head>
   <meta charset="UTF-8">
   <title>FizzBuzz問題</title>
</head>
<body>
<?php
    for($i = 1; $i <= 100; $i++){
        if (($i%3 === 0) && ($i%5 === 0)){
        
    echo "FizzBuzz";
    } else if($i%3 === 0 ){
         echo "Fizz";
    } else if ($i%5 === 0){
     echo "Buzz";
    } else {
         echo $i;
}
 echo PHP_EOL;
}?>
</body>
</html>