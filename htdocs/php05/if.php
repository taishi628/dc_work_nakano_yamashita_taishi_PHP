<pre>
<?php
 
$score = mt_rand(0, 100); //0以上100以下の数値をランダムで返す
print '1つめtrueは80以上2つめだけtrueは30以下2つともfalseはelse_if'. "\n";
var_dump($score);
var_dump($score >= 80);  // ヽ( ﾟ∀ﾟ)ノｷﾀ━!!
var_dump($score <= 30);  // (´･ω･`)ｼｮﾎﾞｰﾝ
 
if ($score >= 80) {
    print 'ヽ( ﾟ∀ﾟ)ノｷﾀ━!!';
} else if ($score <= 30) {
    print '(´･ω･`)ｼｮﾎﾞｰﾝ';
} else {
    print 'ヽ(´ー｀)ノﾏﾀｰﾘ';
}


?>
</pre>