<pre>
<?php
$int = 123;
//$str = '123';
$str = '123abc123'; //補足用
 
if ($int == $str) {
    print '$int == $str is true' . "\n";
} else {
    print '$int == $str is false' . "\n";
}
 
if ($int === $str) {
    print '$int === $str is true' . "\n";
} else {
    print '$int === $str is false' . "\n";
}
?>
</pre>