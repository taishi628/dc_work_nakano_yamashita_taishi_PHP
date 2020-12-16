<?php
$data = 101; 
?>
<!DOCTYPE html>
<html lang="ja">
<head>
   <meta charset="UTF-8">
   <title>3の倍数</title>
</head>
<body>
   <form action="#">
   三倍の数
       <select name="born_year">
<?php
// 3倍の数をforで回してIF文
//iの＄忘れ12/16
for ($i = 1; $i <= $data; $i++) {
    if (($i%3) === 0) {
    ?>
    <option value="<?php print $i; ?>"><?php print $i; ?></option> 
    <?php
    }
    ?>

<?php
}
?>
       </select>
   </form>
</body>
</html>