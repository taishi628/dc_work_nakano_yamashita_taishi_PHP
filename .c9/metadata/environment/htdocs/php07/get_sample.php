{"filter":false,"title":"get_sample.php","tooltip":"/htdocs/php07/get_sample.php","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":0,"column":0},"end":{"row":30,"column":7},"action":"insert","lines":["<?php","if (isset($_GET['query']) === TRUE) {","   $query  = htmlspecialchars($_GET['query'], ENT_QUOTES, 'UTF-8');","}","?>","<!DOCTYPE html>","<html lang=\"ja\">","<head>","   <meta charset=\"UTF-8\">","   <title>スーパーグローバル変数使用例</title>","</head>","<body>","   <h1>検索しよう</h1>","<?php","   // formから検索文字列が渡ってきている場合はGoogleへのリンクを表示","   if (isset($query) === TRUE) {","?>","   <a href=\"https://www.google.co.jp/search?q=<?php print $query; ?>\" target=\"_blank\">「<?php print $query; ?>」をGoogleで検索する</a><br>","   <a href=\"http://www.bing.com/search?q=<?php print $query; ?>\" target=\"_blank\">「<?php print $query; ?>」をbingで検索する</a><br>","   <a href=\"http://search.yahoo.co.jp/search?p=<?php print $query; ?>\" target=\"_blank\">「<?php print $query; ?>」をyahooで検索する</a><br>","   <p>このページをブックマークしてみましょう。<br>ブックマークからこのページにアクセスしても同じページが表示されます</p>","<?php","   }","?>","   <!-- 検索文字列送信用フォーム -->","   <form method=\"get\">","       <input type=\"text\" name=\"query\" value=\"<?php if (isset($query) === TRUE) { print $query; } ?>\">","       <input type=\"submit\" value=\"送信\">","   </form>","</body>","</html>"],"id":1}],[{"start":{"row":19,"column":53},"end":{"row":19,"column":54},"action":"insert","lines":["e"],"id":12},{"start":{"row":19,"column":54},"end":{"row":19,"column":55},"action":"insert","lines":["c"]},{"start":{"row":19,"column":55},"end":{"row":19,"column":56},"action":"insert","lines":["h"]},{"start":{"row":19,"column":56},"end":{"row":19,"column":57},"action":"insert","lines":["o"]}],[{"start":{"row":19,"column":57},"end":{"row":19,"column":58},"action":"remove","lines":["t"],"id":11},{"start":{"row":19,"column":56},"end":{"row":19,"column":57},"action":"remove","lines":["n"]},{"start":{"row":19,"column":55},"end":{"row":19,"column":56},"action":"remove","lines":["i"]},{"start":{"row":19,"column":54},"end":{"row":19,"column":55},"action":"remove","lines":["r"]},{"start":{"row":19,"column":53},"end":{"row":19,"column":54},"action":"remove","lines":["p"]}],[{"start":{"row":18,"column":47},"end":{"row":18,"column":48},"action":"insert","lines":["e"],"id":10},{"start":{"row":18,"column":48},"end":{"row":18,"column":49},"action":"insert","lines":["c"]},{"start":{"row":18,"column":49},"end":{"row":18,"column":50},"action":"insert","lines":["h"]},{"start":{"row":18,"column":50},"end":{"row":18,"column":51},"action":"insert","lines":["o"]}],[{"start":{"row":18,"column":51},"end":{"row":18,"column":52},"action":"remove","lines":["t"],"id":9},{"start":{"row":18,"column":50},"end":{"row":18,"column":51},"action":"remove","lines":["n"]},{"start":{"row":18,"column":49},"end":{"row":18,"column":50},"action":"remove","lines":["i"]},{"start":{"row":18,"column":48},"end":{"row":18,"column":49},"action":"remove","lines":["r"]},{"start":{"row":18,"column":47},"end":{"row":18,"column":48},"action":"remove","lines":["p"]}],[{"start":{"row":17,"column":53},"end":{"row":17,"column":54},"action":"insert","lines":["c"],"id":8},{"start":{"row":17,"column":54},"end":{"row":17,"column":55},"action":"insert","lines":["h"]},{"start":{"row":17,"column":55},"end":{"row":17,"column":56},"action":"insert","lines":["o"]}],[{"start":{"row":17,"column":51},"end":{"row":17,"column":52},"action":"insert","lines":[" "],"id":7},{"start":{"row":17,"column":52},"end":{"row":17,"column":53},"action":"insert","lines":["e"]}],[{"start":{"row":17,"column":50},"end":{"row":17,"column":51},"action":"insert","lines":["p"],"id":6}],[{"start":{"row":17,"column":53},"end":{"row":17,"column":54},"action":"remove","lines":["o"],"id":5},{"start":{"row":17,"column":52},"end":{"row":17,"column":53},"action":"remove","lines":["h"]},{"start":{"row":17,"column":51},"end":{"row":17,"column":52},"action":"remove","lines":["c"]},{"start":{"row":17,"column":50},"end":{"row":17,"column":51},"action":"remove","lines":["e"]}],[{"start":{"row":17,"column":50},"end":{"row":17,"column":51},"action":"insert","lines":["e"],"id":4},{"start":{"row":17,"column":51},"end":{"row":17,"column":52},"action":"insert","lines":["c"]},{"start":{"row":17,"column":52},"end":{"row":17,"column":53},"action":"insert","lines":["h"]},{"start":{"row":17,"column":53},"end":{"row":17,"column":54},"action":"insert","lines":["o"]}],[{"start":{"row":17,"column":50},"end":{"row":17,"column":57},"action":"remove","lines":["p print"],"id":3}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":1,"column":0},"end":{"row":2,"column":67},"isBackwards":true},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1605332843322,"hash":"43d939a99360537d09409306a1762b814a3d6617"}