<pre>
<?php
/* 色々な値の入った変数をvar_dumpしてみよう */
// 数字の１
$var1 = 1;
print '■数字のvar_dump';
print "\n";
var_dump($var1);
print "\n";
// 文字列の１
$var2 = '1';
print '■文字列のvar_dump';
print "\n";
var_dump($var2);
print "\n";
// null
$var3 = null;
print '■nullのvar_dump';
print "\n";
var_dump($var3);
print "\n";
// boolean
$var4 = true;
print '■booleanのvar_dump';
print "\n";
var_dump($var4);
print "\n";
//suji
$var5 = -1;
print "\n";
var_dump($var5);
// date
$var6 = date('Y');
print "\n";
var_dump($var6);
//strlen
$var7 = mb_strlen('文字数は9文字です', 'UTF-8');
print "\n";
var_dump($var7);

?>
</pre>

<pre>
  <?php  
$q_1 = '1'; //文字列型 シングル
$q_2 = "1";//文字列型　ダブル
$q_3 = 1;
$q_4 = 'true';//文字列型
$q_5 = true;    // 論理型(boolean)
$q_6 = 'null'; //null型
$q_7 = '';  //文字列型
$q_8 = 1.34;
$q_9;


print "\n";
var_dump($q_1);
print "\n";
var_dump($q_2);
print "\n";
var_dump($q_3);
print "\n";
var_dump($q_4);
print "\n";
var_dump($q_5);
print "\n";
var_dump($q_6);
print "\n";
var_dump($q_7);
print "\n";
var_dump($q_8);
print "\n";
var_dump($q_9);
    
   ?> 
</pre>