{"filter":false,"title":"challenge_for.php","tooltip":"/htdocs/php08/challenge_for.php","ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":30,"column":7},"end":{"row":30,"column":7},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":11,"state":"start","mode":"ace/mode/php"}},"hash":"9d61b1217b8120d76b16f5fdfcdfeed1846cba2c","undoManager":{"mark":94,"position":94,"stack":[[{"start":{"row":0,"column":0},"end":{"row":24,"column":7},"action":"insert","lines":["<?php","$date = date(\"Y\"); // 現在の西暦を取得","?>","<!DOCTYPE html>","<html lang=\"ja\">","<head>","   <meta charset=\"UTF-8\">","   <title>ループの使用例</title>","</head>","<body>","   <form action=\"#\">","   生まれた西暦を選択してください","       <select name=\"born_year\">","<?php","// 1900年〜現在の西暦までをループで処理する","for ($i = 1; $i <= $date; $i++) {","?>","           <option value=\"<?php print $i; ?>\"><?php print $i; ?>年</option>","<?php","}","?>","       </select>","   </form>","</body>","</html>"],"id":1}],[{"start":{"row":1,"column":19},"end":{"row":1,"column":30},"action":"remove","lines":["// 現在の西暦を取得"],"id":2}],[{"start":{"row":1,"column":16},"end":{"row":1,"column":17},"action":"remove","lines":[")"],"id":3},{"start":{"row":1,"column":15},"end":{"row":1,"column":16},"action":"remove","lines":["\""]},{"start":{"row":1,"column":14},"end":{"row":1,"column":15},"action":"remove","lines":["Y"]},{"start":{"row":1,"column":13},"end":{"row":1,"column":14},"action":"remove","lines":["\""]},{"start":{"row":1,"column":12},"end":{"row":1,"column":13},"action":"remove","lines":["("]},{"start":{"row":1,"column":11},"end":{"row":1,"column":12},"action":"remove","lines":["e"]},{"start":{"row":1,"column":10},"end":{"row":1,"column":11},"action":"remove","lines":["t"]},{"start":{"row":1,"column":9},"end":{"row":1,"column":10},"action":"remove","lines":["a"]},{"start":{"row":1,"column":8},"end":{"row":1,"column":9},"action":"remove","lines":["d"]}],[{"start":{"row":1,"column":8},"end":{"row":1,"column":9},"action":"insert","lines":["0"],"id":4},{"start":{"row":1,"column":9},"end":{"row":1,"column":10},"action":"insert","lines":["1"]}],[{"start":{"row":1,"column":9},"end":{"row":1,"column":10},"action":"remove","lines":["1"],"id":5},{"start":{"row":1,"column":8},"end":{"row":1,"column":9},"action":"remove","lines":["0"]}],[{"start":{"row":1,"column":8},"end":{"row":1,"column":9},"action":"insert","lines":["1"],"id":6},{"start":{"row":1,"column":9},"end":{"row":1,"column":10},"action":"insert","lines":["9"]},{"start":{"row":1,"column":10},"end":{"row":1,"column":11},"action":"insert","lines":["1"]}],[{"start":{"row":1,"column":10},"end":{"row":1,"column":11},"action":"remove","lines":["1"],"id":7},{"start":{"row":1,"column":9},"end":{"row":1,"column":10},"action":"remove","lines":["9"]}],[{"start":{"row":1,"column":9},"end":{"row":1,"column":10},"action":"insert","lines":["0"],"id":8},{"start":{"row":1,"column":10},"end":{"row":1,"column":11},"action":"insert","lines":["1"]}],[{"start":{"row":1,"column":4},"end":{"row":1,"column":5},"action":"remove","lines":["e"],"id":9}],[{"start":{"row":1,"column":4},"end":{"row":1,"column":5},"action":"insert","lines":["a"],"id":10}],[{"start":{"row":15,"column":23},"end":{"row":15,"column":24},"action":"remove","lines":["e"],"id":11}],[{"start":{"row":15,"column":23},"end":{"row":15,"column":24},"action":"insert","lines":["a"],"id":12}],[{"start":{"row":15,"column":30},"end":{"row":15,"column":31},"action":"insert","lines":["+"],"id":13}],[{"start":{"row":15,"column":30},"end":{"row":15,"column":31},"action":"remove","lines":["+"],"id":14},{"start":{"row":15,"column":29},"end":{"row":15,"column":30},"action":"remove","lines":["+"]}],[{"start":{"row":15,"column":28},"end":{"row":15,"column":29},"action":"remove","lines":["+"],"id":15}],[{"start":{"row":15,"column":28},"end":{"row":15,"column":29},"action":"insert","lines":[":"],"id":16}],[{"start":{"row":15,"column":28},"end":{"row":15,"column":29},"action":"remove","lines":[":"],"id":17}],[{"start":{"row":15,"column":28},"end":{"row":15,"column":29},"action":"insert","lines":["*"],"id":18}],[{"start":{"row":15,"column":29},"end":{"row":15,"column":30},"action":"insert","lines":["3"],"id":19}],[{"start":{"row":11,"column":3},"end":{"row":11,"column":18},"action":"remove","lines":["生まれた西暦を選択してください"],"id":27},{"start":{"row":11,"column":3},"end":{"row":11,"column":8},"action":"insert","lines":["は三倍の数"]}],[{"start":{"row":11,"column":3},"end":{"row":11,"column":4},"action":"remove","lines":["は"],"id":28}],[{"start":{"row":17,"column":64},"end":{"row":17,"column":65},"action":"remove","lines":["年"],"id":29}],[{"start":{"row":15,"column":10},"end":{"row":15,"column":11},"action":"remove","lines":["1"],"id":30}],[{"start":{"row":15,"column":10},"end":{"row":15,"column":11},"action":"insert","lines":["0"],"id":31},{"start":{"row":15,"column":11},"end":{"row":15,"column":12},"action":"insert","lines":["0"]}],[{"start":{"row":15,"column":10},"end":{"row":15,"column":11},"action":"remove","lines":["0"],"id":32}],[{"start":{"row":15,"column":10},"end":{"row":15,"column":11},"action":"remove","lines":["0"],"id":33},{"start":{"row":15,"column":10},"end":{"row":15,"column":11},"action":"insert","lines":["3"]}],[{"start":{"row":14,"column":24},"end":{"row":14,"column":25},"action":"remove","lines":["る"],"id":34},{"start":{"row":14,"column":23},"end":{"row":14,"column":24},"action":"remove","lines":["す"]},{"start":{"row":14,"column":22},"end":{"row":14,"column":23},"action":"remove","lines":["理"]},{"start":{"row":14,"column":21},"end":{"row":14,"column":22},"action":"remove","lines":["処"]},{"start":{"row":14,"column":20},"end":{"row":14,"column":21},"action":"remove","lines":["で"]},{"start":{"row":14,"column":19},"end":{"row":14,"column":20},"action":"remove","lines":["プ"]},{"start":{"row":14,"column":18},"end":{"row":14,"column":19},"action":"remove","lines":["ー"]},{"start":{"row":14,"column":17},"end":{"row":14,"column":18},"action":"remove","lines":["ル"]},{"start":{"row":14,"column":16},"end":{"row":14,"column":17},"action":"remove","lines":["を"]},{"start":{"row":14,"column":15},"end":{"row":14,"column":16},"action":"remove","lines":["で"]},{"start":{"row":14,"column":14},"end":{"row":14,"column":15},"action":"remove","lines":["ま"]},{"start":{"row":14,"column":13},"end":{"row":14,"column":14},"action":"remove","lines":["暦"]},{"start":{"row":14,"column":12},"end":{"row":14,"column":13},"action":"remove","lines":["西"]},{"start":{"row":14,"column":11},"end":{"row":14,"column":12},"action":"remove","lines":["の"]},{"start":{"row":14,"column":10},"end":{"row":14,"column":11},"action":"remove","lines":["在"]},{"start":{"row":14,"column":9},"end":{"row":14,"column":10},"action":"remove","lines":["現"]},{"start":{"row":14,"column":8},"end":{"row":14,"column":9},"action":"remove","lines":["〜"]},{"start":{"row":14,"column":7},"end":{"row":14,"column":8},"action":"remove","lines":["年"]},{"start":{"row":14,"column":6},"end":{"row":14,"column":7},"action":"remove","lines":["0"]},{"start":{"row":14,"column":5},"end":{"row":14,"column":6},"action":"remove","lines":["0"]},{"start":{"row":14,"column":4},"end":{"row":14,"column":5},"action":"remove","lines":["9"]},{"start":{"row":14,"column":3},"end":{"row":14,"column":4},"action":"remove","lines":["1"]}],[{"start":{"row":14,"column":3},"end":{"row":14,"column":5},"action":"insert","lines":["3倍"],"id":35},{"start":{"row":14,"column":5},"end":{"row":14,"column":6},"action":"insert","lines":["の"]}],[{"start":{"row":14,"column":6},"end":{"row":14,"column":7},"action":"insert","lines":["数"],"id":36},{"start":{"row":14,"column":7},"end":{"row":14,"column":8},"action":"insert","lines":["を"]}],[{"start":{"row":15,"column":10},"end":{"row":15,"column":11},"action":"remove","lines":["3"],"id":37}],[{"start":{"row":15,"column":10},"end":{"row":15,"column":11},"action":"insert","lines":["1"],"id":38}],[{"start":{"row":15,"column":29},"end":{"row":15,"column":30},"action":"remove","lines":["3"],"id":40},{"start":{"row":15,"column":28},"end":{"row":15,"column":29},"action":"remove","lines":["*"]}],[{"start":{"row":15,"column":28},"end":{"row":15,"column":29},"action":"insert","lines":["+"],"id":41},{"start":{"row":15,"column":29},"end":{"row":15,"column":30},"action":"insert","lines":["+"]},{"start":{"row":15,"column":30},"end":{"row":15,"column":31},"action":"insert","lines":[";"]}],[{"start":{"row":15,"column":30},"end":{"row":15,"column":31},"action":"remove","lines":[";"],"id":42}],[{"start":{"row":15,"column":33},"end":{"row":16,"column":0},"action":"insert","lines":["",""],"id":43},{"start":{"row":16,"column":0},"end":{"row":16,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":15,"column":33},"end":{"row":16,"column":0},"action":"insert","lines":["",""],"id":44},{"start":{"row":16,"column":0},"end":{"row":16,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":16,"column":4},"end":{"row":18,"column":9},"action":"insert","lines":["        if (i%3 === 0) {","        sum += i","        }"],"id":45}],[{"start":{"row":18,"column":9},"end":{"row":19,"column":0},"action":"insert","lines":["",""],"id":46},{"start":{"row":19,"column":0},"end":{"row":19,"column":8},"action":"insert","lines":["        "]},{"start":{"row":19,"column":8},"end":{"row":19,"column":9},"action":"insert","lines":["}"]},{"start":{"row":19,"column":0},"end":{"row":19,"column":8},"action":"remove","lines":["        "]}],[{"start":{"row":14,"column":8},"end":{"row":15,"column":0},"action":"insert","lines":["",""],"id":47}],[{"start":{"row":15,"column":0},"end":{"row":15,"column":1},"action":"insert","lines":["$"],"id":48},{"start":{"row":15,"column":1},"end":{"row":15,"column":2},"action":"insert","lines":["s"]},{"start":{"row":15,"column":2},"end":{"row":15,"column":3},"action":"insert","lines":["u"]},{"start":{"row":15,"column":3},"end":{"row":15,"column":4},"action":"insert","lines":["m"]}],[{"start":{"row":15,"column":4},"end":{"row":15,"column":5},"action":"insert","lines":[" "],"id":49},{"start":{"row":15,"column":5},"end":{"row":15,"column":6},"action":"insert","lines":["="]}],[{"start":{"row":15,"column":6},"end":{"row":15,"column":7},"action":"insert","lines":[" "],"id":50},{"start":{"row":15,"column":7},"end":{"row":15,"column":8},"action":"insert","lines":["o"]}],[{"start":{"row":15,"column":8},"end":{"row":15,"column":9},"action":"insert","lines":[";"],"id":51}],[{"start":{"row":15,"column":8},"end":{"row":15,"column":9},"action":"remove","lines":[";"],"id":52},{"start":{"row":15,"column":7},"end":{"row":15,"column":8},"action":"remove","lines":["o"]}],[{"start":{"row":15,"column":7},"end":{"row":15,"column":8},"action":"insert","lines":["0"],"id":53},{"start":{"row":15,"column":8},"end":{"row":15,"column":9},"action":"insert","lines":["+"]}],[{"start":{"row":15,"column":8},"end":{"row":15,"column":9},"action":"remove","lines":["+"],"id":54}],[{"start":{"row":15,"column":8},"end":{"row":15,"column":9},"action":"insert","lines":[";"],"id":55}],[{"start":{"row":17,"column":8},"end":{"row":17,"column":12},"action":"remove","lines":["    "],"id":56},{"start":{"row":17,"column":4},"end":{"row":17,"column":8},"action":"remove","lines":["    "]}],[{"start":{"row":18,"column":4},"end":{"row":18,"column":8},"action":"remove","lines":["    "],"id":57}],[{"start":{"row":18,"column":0},"end":{"row":18,"column":1},"action":"insert","lines":["$"],"id":58},{"start":{"row":18,"column":1},"end":{"row":18,"column":2},"action":"insert","lines":["n"]},{"start":{"row":18,"column":2},"end":{"row":18,"column":3},"action":"insert","lines":["u"]},{"start":{"row":18,"column":3},"end":{"row":18,"column":4},"action":"insert","lines":["m"]}],[{"start":{"row":18,"column":8},"end":{"row":18,"column":9},"action":"insert","lines":["&"],"id":59}],[{"start":{"row":18,"column":8},"end":{"row":18,"column":9},"action":"remove","lines":["&"],"id":60}],[{"start":{"row":18,"column":8},"end":{"row":18,"column":9},"action":"insert","lines":["$"],"id":61}],[{"start":{"row":18,"column":4},"end":{"row":18,"column":8},"action":"remove","lines":["    "],"id":62}],[{"start":{"row":18,"column":3},"end":{"row":18,"column":4},"action":"remove","lines":["m"],"id":63},{"start":{"row":18,"column":2},"end":{"row":18,"column":3},"action":"remove","lines":["u"]},{"start":{"row":18,"column":1},"end":{"row":18,"column":2},"action":"remove","lines":["n"]},{"start":{"row":18,"column":0},"end":{"row":18,"column":1},"action":"remove","lines":["$"]}],[{"start":{"row":19,"column":4},"end":{"row":19,"column":8},"action":"remove","lines":["    "],"id":64},{"start":{"row":19,"column":0},"end":{"row":19,"column":4},"action":"remove","lines":["    "]},{"start":{"row":18,"column":9},"end":{"row":19,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":18,"column":9},"end":{"row":20,"column":4},"action":"insert","lines":["","        ","    "],"id":65}],[{"start":{"row":18,"column":9},"end":{"row":18,"column":10},"action":"insert","lines":[";"],"id":66}],[{"start":{"row":21,"column":0},"end":{"row":21,"column":1},"action":"remove","lines":["}"],"id":67},{"start":{"row":20,"column":5},"end":{"row":21,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":23,"column":39},"end":{"row":23,"column":40},"action":"remove","lines":["i"],"id":68}],[{"start":{"row":23,"column":39},"end":{"row":23,"column":40},"action":"insert","lines":["s"],"id":69},{"start":{"row":23,"column":40},"end":{"row":23,"column":41},"action":"insert","lines":["u"]},{"start":{"row":23,"column":41},"end":{"row":23,"column":42},"action":"insert","lines":["m"]}],[{"start":{"row":23,"column":61},"end":{"row":23,"column":62},"action":"remove","lines":["i"],"id":70}],[{"start":{"row":23,"column":61},"end":{"row":23,"column":62},"action":"insert","lines":["s"],"id":71},{"start":{"row":23,"column":62},"end":{"row":23,"column":63},"action":"insert","lines":["u"]},{"start":{"row":23,"column":63},"end":{"row":23,"column":64},"action":"insert","lines":["m"]}],[{"start":{"row":17,"column":8},"end":{"row":17,"column":9},"action":"insert","lines":["("],"id":72}],[{"start":{"row":17,"column":12},"end":{"row":17,"column":13},"action":"insert","lines":[")"],"id":73}],[{"start":{"row":18,"column":0},"end":{"row":18,"column":10},"action":"remove","lines":["$sum += i;"],"id":74}],[{"start":{"row":23,"column":11},"end":{"row":23,"column":77},"action":"remove","lines":["<option value=\"<?php print $sum; ?>\"><?php print $sum; ?></option>"],"id":75}],[{"start":{"row":19,"column":4},"end":{"row":19,"column":70},"action":"insert","lines":["<option value=\"<?php print $sum; ?>\"><?php print $sum; ?></option>"],"id":76}],[{"start":{"row":22,"column":0},"end":{"row":22,"column":2},"action":"remove","lines":["?>"],"id":77}],[{"start":{"row":18,"column":0},"end":{"row":18,"column":4},"action":"insert","lines":["    "],"id":78}],[{"start":{"row":18,"column":4},"end":{"row":18,"column":6},"action":"insert","lines":["?>"],"id":79}],[{"start":{"row":23,"column":1},"end":{"row":23,"column":2},"action":"remove","lines":[" "],"id":80},{"start":{"row":23,"column":0},"end":{"row":23,"column":1},"action":"remove","lines":[" "]},{"start":{"row":22,"column":0},"end":{"row":23,"column":9},"action":"remove","lines":["","         "]},{"start":{"row":21,"column":4},"end":{"row":22,"column":0},"action":"remove","lines":["",""]},{"start":{"row":21,"column":0},"end":{"row":21,"column":4},"action":"remove","lines":["    "]},{"start":{"row":20,"column":5},"end":{"row":21,"column":0},"action":"remove","lines":["",""]},{"start":{"row":20,"column":4},"end":{"row":20,"column":5},"action":"remove","lines":["}"]},{"start":{"row":20,"column":0},"end":{"row":20,"column":4},"action":"remove","lines":["    "]}],[{"start":{"row":19,"column":74},"end":{"row":20,"column":0},"action":"remove","lines":["",""],"id":81},{"start":{"row":19,"column":73},"end":{"row":19,"column":74},"action":"remove","lines":[" "]},{"start":{"row":19,"column":72},"end":{"row":19,"column":73},"action":"remove","lines":[" "]}],[{"start":{"row":19,"column":71},"end":{"row":19,"column":72},"action":"remove","lines":[" "],"id":82}],[{"start":{"row":22,"column":2},"end":{"row":23,"column":0},"action":"insert","lines":["",""],"id":83},{"start":{"row":23,"column":0},"end":{"row":24,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":24,"column":0},"end":{"row":26,"column":2},"action":"insert","lines":["<?php","}","?>"],"id":84}],[{"start":{"row":20,"column":0},"end":{"row":20,"column":4},"action":"insert","lines":["    "],"id":85},{"start":{"row":21,"column":0},"end":{"row":21,"column":4},"action":"insert","lines":["    "]},{"start":{"row":22,"column":0},"end":{"row":22,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":19,"column":34},"end":{"row":19,"column":35},"action":"remove","lines":["m"],"id":86},{"start":{"row":19,"column":33},"end":{"row":19,"column":34},"action":"remove","lines":["u"]},{"start":{"row":19,"column":32},"end":{"row":19,"column":33},"action":"remove","lines":["s"]}],[{"start":{"row":19,"column":32},"end":{"row":19,"column":33},"action":"insert","lines":["i"],"id":87}],[{"start":{"row":19,"column":54},"end":{"row":19,"column":55},"action":"remove","lines":["m"],"id":88},{"start":{"row":19,"column":53},"end":{"row":19,"column":54},"action":"remove","lines":["u"]},{"start":{"row":19,"column":52},"end":{"row":19,"column":53},"action":"remove","lines":["s"]}],[{"start":{"row":19,"column":52},"end":{"row":19,"column":53},"action":"insert","lines":["i"],"id":89}],[{"start":{"row":17,"column":9},"end":{"row":17,"column":10},"action":"insert","lines":["$"],"id":90}],[{"start":{"row":7,"column":16},"end":{"row":7,"column":17},"action":"remove","lines":["例"],"id":91},{"start":{"row":7,"column":15},"end":{"row":7,"column":16},"action":"remove","lines":["用"]},{"start":{"row":7,"column":14},"end":{"row":7,"column":15},"action":"remove","lines":["使"]},{"start":{"row":7,"column":13},"end":{"row":7,"column":14},"action":"remove","lines":["の"]},{"start":{"row":7,"column":12},"end":{"row":7,"column":13},"action":"remove","lines":["プ"]},{"start":{"row":7,"column":11},"end":{"row":7,"column":12},"action":"remove","lines":["ー"]},{"start":{"row":7,"column":10},"end":{"row":7,"column":11},"action":"remove","lines":["ル"]}],[{"start":{"row":7,"column":10},"end":{"row":7,"column":11},"action":"insert","lines":["3"],"id":92},{"start":{"row":7,"column":11},"end":{"row":7,"column":12},"action":"insert","lines":["の"]}],[{"start":{"row":7,"column":12},"end":{"row":7,"column":14},"action":"insert","lines":["倍数"],"id":93}],[{"start":{"row":14,"column":8},"end":{"row":14,"column":9},"action":"insert","lines":["f"],"id":94},{"start":{"row":14,"column":9},"end":{"row":14,"column":10},"action":"insert","lines":["o"]},{"start":{"row":14,"column":10},"end":{"row":14,"column":11},"action":"insert","lines":["r"]}],[{"start":{"row":14,"column":11},"end":{"row":14,"column":12},"action":"insert","lines":["で"],"id":95}],[{"start":{"row":14,"column":12},"end":{"row":14,"column":15},"action":"insert","lines":["回して"],"id":96},{"start":{"row":14,"column":15},"end":{"row":14,"column":17},"action":"insert","lines":["IF"]}],[{"start":{"row":14,"column":17},"end":{"row":14,"column":18},"action":"insert","lines":["文"],"id":97}],[{"start":{"row":15,"column":8},"end":{"row":15,"column":9},"action":"remove","lines":[";"],"id":98},{"start":{"row":15,"column":7},"end":{"row":15,"column":8},"action":"remove","lines":["0"]},{"start":{"row":15,"column":6},"end":{"row":15,"column":7},"action":"remove","lines":[" "]},{"start":{"row":15,"column":5},"end":{"row":15,"column":6},"action":"remove","lines":["="]},{"start":{"row":15,"column":4},"end":{"row":15,"column":5},"action":"remove","lines":[" "]},{"start":{"row":15,"column":3},"end":{"row":15,"column":4},"action":"remove","lines":["m"]},{"start":{"row":15,"column":2},"end":{"row":15,"column":3},"action":"remove","lines":["u"]},{"start":{"row":15,"column":1},"end":{"row":15,"column":2},"action":"remove","lines":["s"]},{"start":{"row":15,"column":0},"end":{"row":15,"column":1},"action":"remove","lines":["$"]}],[{"start":{"row":15,"column":0},"end":{"row":15,"column":2},"action":"insert","lines":["//"],"id":99}],[{"start":{"row":15,"column":2},"end":{"row":15,"column":3},"action":"insert","lines":["i"],"id":100},{"start":{"row":15,"column":3},"end":{"row":15,"column":4},"action":"insert","lines":["の"]}],[{"start":{"row":15,"column":4},"end":{"row":15,"column":5},"action":"insert","lines":["＄"],"id":101}],[{"start":{"row":15,"column":5},"end":{"row":15,"column":7},"action":"insert","lines":["忘れ"],"id":102}],[{"start":{"row":15,"column":7},"end":{"row":15,"column":12},"action":"insert","lines":["12/16"],"id":103}]]},"timestamp":1608097849888}