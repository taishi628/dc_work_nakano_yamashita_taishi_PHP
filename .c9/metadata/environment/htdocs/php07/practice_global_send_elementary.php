{"changed":true,"filter":false,"title":"practice_global_send_elementary.php","tooltip":"/htdocs/php07/practice_global_send_elementary.php","value":"\n<?php\n// 変数初期化\n\n//テキストボックスに名前を入力してPOSTで送信するページを作成し、\n//入力されている場合は「ようこそ◯◯さん」\n//入力されていない場合は「名前を入力してください」\n//と表示するプログラムを作成してください。\n//POSTでデータを送信するファイルと受信するファイルは、別々に作成してください。\n\n$name = ''; //変数初期化\nif (isset($_POST['name']) === TRUE) {   //POSTで'ネーム'を返す\n   $name  = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');　//ネームを\"''区別なくHTMLエンテイに変換\n\n?>\n<!DOCTYPE html>\n<html lang=\"ja\">\n<head>\n   <meta charset=\"UTF-8\">\n   <title>課題７－８</title>\n</head>\n<body>\n   <h1>名前がいきわたるやつ</h1>\n   \n   <?php\n   // formから文字列が渡ってきている場合はnameさん表示\n   if (!isset($_POST['name']) || $_POST['name'] === '') {\n    $errors[] = 'Eメールアドレスが入力されていません';\n}\n    if (isset($query) === TRUE) {?>\n   \n    }\n    \n   \n   if (isset($name) === TRUE) {\n?>\n    <p>ようこそ<?php echo $name ?>さん</p>\n<?php } elseif(isset($name) === false) { ?>\n    <p>名前を入力してください</p>\n<?php } ?>\n   <!-- 名前いれるやつ -->\n   <form method=\"post\">\n       <input type=\"text\" name=\"name\" value=\"<?php if (isset($name) === TRUE) { print $name; } ?>\">\n       <input type=\"submit\" value=\"送信\">\n   </form>\n</body>\n</html>","undoManager":{"mark":87,"position":100,"stack":[[{"start":{"row":31,"column":19},"end":{"row":31,"column":20},"action":"remove","lines":["ム"],"id":82},{"start":{"row":31,"column":18},"end":{"row":31,"column":19},"action":"remove","lines":["ー"]},{"start":{"row":31,"column":17},"end":{"row":31,"column":18},"action":"remove","lines":["ォ"]},{"start":{"row":31,"column":16},"end":{"row":31,"column":17},"action":"remove","lines":["フ"]},{"start":{"row":31,"column":15},"end":{"row":31,"column":16},"action":"remove","lines":["用"]},{"start":{"row":31,"column":14},"end":{"row":31,"column":15},"action":"remove","lines":["信"]},{"start":{"row":31,"column":13},"end":{"row":31,"column":14},"action":"remove","lines":["送"]},{"start":{"row":31,"column":12},"end":{"row":31,"column":13},"action":"remove","lines":["列"]},{"start":{"row":31,"column":11},"end":{"row":31,"column":12},"action":"remove","lines":["字"]},{"start":{"row":31,"column":10},"end":{"row":31,"column":11},"action":"remove","lines":["文"]},{"start":{"row":31,"column":9},"end":{"row":31,"column":10},"action":"remove","lines":["索"]},{"start":{"row":31,"column":8},"end":{"row":31,"column":9},"action":"remove","lines":["検"]}],[{"start":{"row":31,"column":8},"end":{"row":31,"column":9},"action":"insert","lines":["n"],"id":83},{"start":{"row":31,"column":9},"end":{"row":31,"column":10},"action":"insert","lines":["a"]},{"start":{"row":31,"column":10},"end":{"row":31,"column":11},"action":"insert","lines":["m"]},{"start":{"row":31,"column":11},"end":{"row":31,"column":12},"action":"insert","lines":["a"]}],[{"start":{"row":31,"column":11},"end":{"row":31,"column":12},"action":"remove","lines":["a"],"id":84},{"start":{"row":31,"column":10},"end":{"row":31,"column":11},"action":"remove","lines":["m"]},{"start":{"row":31,"column":9},"end":{"row":31,"column":10},"action":"remove","lines":["a"]},{"start":{"row":31,"column":8},"end":{"row":31,"column":9},"action":"remove","lines":["n"]}],[{"start":{"row":31,"column":8},"end":{"row":31,"column":10},"action":"insert","lines":["名前"],"id":85}],[{"start":{"row":31,"column":10},"end":{"row":31,"column":13},"action":"insert","lines":["いれる"],"id":86}],[{"start":{"row":31,"column":13},"end":{"row":31,"column":15},"action":"insert","lines":["やつ"],"id":87}],[{"start":{"row":27,"column":13},"end":{"row":27,"column":14},"action":"remove","lines":["索"],"id":88},{"start":{"row":27,"column":12},"end":{"row":27,"column":13},"action":"remove","lines":["検"]}],[{"start":{"row":27,"column":26},"end":{"row":27,"column":40},"action":"remove","lines":["Googleへのリンクを表示"],"id":89}],[{"start":{"row":27,"column":26},"end":{"row":27,"column":29},"action":"insert","lines":["三表示"],"id":90}],[{"start":{"row":27,"column":28},"end":{"row":27,"column":29},"action":"remove","lines":["示"],"id":91},{"start":{"row":27,"column":27},"end":{"row":27,"column":28},"action":"remove","lines":["表"]},{"start":{"row":27,"column":26},"end":{"row":27,"column":27},"action":"remove","lines":["三"]}],[{"start":{"row":27,"column":26},"end":{"row":27,"column":27},"action":"insert","lines":["n"],"id":92},{"start":{"row":27,"column":27},"end":{"row":27,"column":28},"action":"insert","lines":["a"]},{"start":{"row":27,"column":28},"end":{"row":27,"column":29},"action":"insert","lines":["m"]},{"start":{"row":27,"column":29},"end":{"row":27,"column":30},"action":"insert","lines":["e"]}],[{"start":{"row":27,"column":30},"end":{"row":27,"column":32},"action":"insert","lines":["さん"],"id":93}],[{"start":{"row":27,"column":32},"end":{"row":27,"column":34},"action":"insert","lines":["表示"],"id":94}],[{"start":{"row":29,"column":2},"end":{"row":30,"column":0},"action":"insert","lines":["",""],"id":95}],[{"start":{"row":30,"column":0},"end":{"row":31,"column":0},"action":"insert","lines":["",""],"id":96}],[{"start":{"row":31,"column":0},"end":{"row":31,"column":1},"action":"insert","lines":["<"],"id":97}],[{"start":{"row":31,"column":1},"end":{"row":31,"column":2},"action":"insert","lines":["?"],"id":98},{"start":{"row":31,"column":2},"end":{"row":31,"column":3},"action":"insert","lines":["p"]},{"start":{"row":31,"column":3},"end":{"row":31,"column":4},"action":"insert","lines":["h"]},{"start":{"row":31,"column":4},"end":{"row":31,"column":5},"action":"insert","lines":["p"]}],[{"start":{"row":31,"column":5},"end":{"row":31,"column":6},"action":"insert","lines":[" "],"id":99},{"start":{"row":31,"column":6},"end":{"row":31,"column":7},"action":"insert","lines":["}"]}],[{"start":{"row":31,"column":7},"end":{"row":31,"column":8},"action":"insert","lines":[" "],"id":100},{"start":{"row":31,"column":8},"end":{"row":31,"column":9},"action":"insert","lines":["?"]}],[{"start":{"row":31,"column":9},"end":{"row":31,"column":10},"action":"insert","lines":[">"],"id":101}],[{"start":{"row":30,"column":0},"end":{"row":30,"column":4},"action":"insert","lines":["    "],"id":102}],[{"start":{"row":30,"column":4},"end":{"row":30,"column":5},"action":"insert","lines":["<"],"id":103},{"start":{"row":30,"column":5},"end":{"row":30,"column":6},"action":"insert","lines":[">"]}],[{"start":{"row":30,"column":5},"end":{"row":30,"column":6},"action":"insert","lines":["p"],"id":104}],[{"start":{"row":30,"column":7},"end":{"row":30,"column":8},"action":"insert","lines":["<"],"id":106},{"start":{"row":30,"column":8},"end":{"row":30,"column":9},"action":"insert","lines":[">"]}],[{"start":{"row":30,"column":8},"end":{"row":30,"column":9},"action":"insert","lines":["/"],"id":107},{"start":{"row":30,"column":9},"end":{"row":30,"column":10},"action":"insert","lines":["p"]}],[{"start":{"row":30,"column":7},"end":{"row":30,"column":8},"action":"insert","lines":["y"],"id":108},{"start":{"row":30,"column":8},"end":{"row":30,"column":9},"action":"insert","lines":["o"]},{"start":{"row":30,"column":9},"end":{"row":30,"column":10},"action":"insert","lines":["u"]}],[{"start":{"row":30,"column":9},"end":{"row":30,"column":10},"action":"remove","lines":["u"],"id":109},{"start":{"row":30,"column":8},"end":{"row":30,"column":9},"action":"remove","lines":["o"]},{"start":{"row":30,"column":7},"end":{"row":30,"column":8},"action":"remove","lines":["y"]}],[{"start":{"row":30,"column":7},"end":{"row":30,"column":11},"action":"insert","lines":["ようこそ"],"id":110}],[{"start":{"row":30,"column":11},"end":{"row":30,"column":12},"action":"insert","lines":["<"],"id":111},{"start":{"row":30,"column":12},"end":{"row":30,"column":13},"action":"insert","lines":["?"]}],[{"start":{"row":30,"column":13},"end":{"row":30,"column":14},"action":"insert","lines":["p"],"id":112},{"start":{"row":30,"column":14},"end":{"row":30,"column":15},"action":"insert","lines":["h"]},{"start":{"row":30,"column":15},"end":{"row":30,"column":16},"action":"insert","lines":["p"]}],[{"start":{"row":30,"column":16},"end":{"row":30,"column":17},"action":"insert","lines":[" "],"id":113},{"start":{"row":30,"column":17},"end":{"row":30,"column":18},"action":"insert","lines":["?"]}],[{"start":{"row":30,"column":18},"end":{"row":30,"column":19},"action":"insert","lines":[">"],"id":114}],[{"start":{"row":30,"column":17},"end":{"row":30,"column":18},"action":"insert","lines":["$"],"id":115}],[{"start":{"row":30,"column":18},"end":{"row":30,"column":19},"action":"insert","lines":["n"],"id":116},{"start":{"row":30,"column":19},"end":{"row":30,"column":20},"action":"insert","lines":["a"]},{"start":{"row":30,"column":20},"end":{"row":30,"column":21},"action":"insert","lines":["m"]},{"start":{"row":30,"column":21},"end":{"row":30,"column":22},"action":"insert","lines":["e"]}],[{"start":{"row":30,"column":22},"end":{"row":30,"column":23},"action":"insert","lines":[" "],"id":117}],[{"start":{"row":30,"column":17},"end":{"row":30,"column":18},"action":"insert","lines":["e"],"id":118},{"start":{"row":30,"column":18},"end":{"row":30,"column":19},"action":"insert","lines":["c"]},{"start":{"row":30,"column":19},"end":{"row":30,"column":20},"action":"insert","lines":["h"]},{"start":{"row":30,"column":20},"end":{"row":30,"column":21},"action":"insert","lines":["o"]}],[{"start":{"row":30,"column":21},"end":{"row":30,"column":22},"action":"insert","lines":[" "],"id":119}],[{"start":{"row":30,"column":30},"end":{"row":30,"column":31},"action":"insert","lines":["s"],"id":120},{"start":{"row":30,"column":31},"end":{"row":30,"column":32},"action":"insert","lines":["a"]}],[{"start":{"row":30,"column":31},"end":{"row":30,"column":32},"action":"remove","lines":["a"],"id":121},{"start":{"row":30,"column":30},"end":{"row":30,"column":31},"action":"remove","lines":["s"]}],[{"start":{"row":30,"column":30},"end":{"row":30,"column":32},"action":"insert","lines":["さん"],"id":122}],[{"start":{"row":31,"column":8},"end":{"row":31,"column":9},"action":"insert","lines":["e"],"id":123},{"start":{"row":31,"column":9},"end":{"row":31,"column":10},"action":"insert","lines":["l"]},{"start":{"row":31,"column":10},"end":{"row":31,"column":11},"action":"insert","lines":["s"]},{"start":{"row":31,"column":11},"end":{"row":31,"column":12},"action":"insert","lines":["e"]}],[{"start":{"row":31,"column":12},"end":{"row":31,"column":13},"action":"insert","lines":[" "],"id":124}],[{"start":{"row":31,"column":13},"end":{"row":31,"column":14},"action":"insert","lines":["{"],"id":125}],[{"start":{"row":31,"column":16},"end":{"row":31,"column":17},"action":"insert","lines":[" "],"id":126}],[{"start":{"row":31,"column":14},"end":{"row":31,"column":15},"action":"insert","lines":[" "],"id":127}],[{"start":{"row":31,"column":17},"end":{"row":31,"column":18},"action":"remove","lines":[" "],"id":128},{"start":{"row":31,"column":17},"end":{"row":32,"column":0},"action":"insert","lines":["",""]},{"start":{"row":32,"column":0},"end":{"row":32,"column":1},"action":"insert","lines":[" "]}],[{"start":{"row":32,"column":0},"end":{"row":32,"column":1},"action":"remove","lines":[" "],"id":129}],[{"start":{"row":32,"column":0},"end":{"row":32,"column":4},"action":"insert","lines":["    "],"id":130}],[{"start":{"row":30,"column":0},"end":{"row":30,"column":4},"action":"remove","lines":["    "],"id":131}],[{"start":{"row":30,"column":0},"end":{"row":30,"column":4},"action":"insert","lines":["    "],"id":132}],[{"start":{"row":32,"column":4},"end":{"row":32,"column":36},"action":"insert","lines":["<p>ようこそ<?php echo $name ?>さん</p>"],"id":133}],[{"start":{"row":42,"column":0},"end":{"row":43,"column":0},"action":"remove","lines":["",""],"id":134},{"start":{"row":41,"column":7},"end":{"row":42,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":33,"column":0},"end":{"row":33,"column":1},"action":"insert","lines":["<"],"id":135},{"start":{"row":33,"column":1},"end":{"row":33,"column":2},"action":"insert","lines":["?"]}],[{"start":{"row":33,"column":2},"end":{"row":33,"column":3},"action":"insert","lines":["p"],"id":136},{"start":{"row":33,"column":3},"end":{"row":33,"column":4},"action":"insert","lines":["h"]},{"start":{"row":33,"column":4},"end":{"row":33,"column":5},"action":"insert","lines":["p"]}],[{"start":{"row":33,"column":5},"end":{"row":33,"column":6},"action":"insert","lines":[" "],"id":137},{"start":{"row":33,"column":6},"end":{"row":33,"column":7},"action":"insert","lines":["}"]}],[{"start":{"row":33,"column":7},"end":{"row":33,"column":8},"action":"insert","lines":[" "],"id":138},{"start":{"row":33,"column":8},"end":{"row":33,"column":9},"action":"insert","lines":["?"]},{"start":{"row":33,"column":9},"end":{"row":33,"column":10},"action":"insert","lines":[">"]}],[{"start":{"row":36,"column":91},"end":{"row":36,"column":92},"action":"remove","lines":["y"],"id":139},{"start":{"row":36,"column":90},"end":{"row":36,"column":91},"action":"remove","lines":["r"]},{"start":{"row":36,"column":89},"end":{"row":36,"column":90},"action":"remove","lines":["e"]},{"start":{"row":36,"column":88},"end":{"row":36,"column":89},"action":"remove","lines":["u"]},{"start":{"row":36,"column":87},"end":{"row":36,"column":88},"action":"remove","lines":["q"]}],[{"start":{"row":36,"column":87},"end":{"row":36,"column":88},"action":"insert","lines":["n"],"id":140},{"start":{"row":36,"column":88},"end":{"row":36,"column":89},"action":"insert","lines":["a"]},{"start":{"row":36,"column":89},"end":{"row":36,"column":90},"action":"insert","lines":["m"]},{"start":{"row":36,"column":90},"end":{"row":36,"column":91},"action":"insert","lines":["e"]}],[{"start":{"row":36,"column":86},"end":{"row":36,"column":91},"action":"remove","lines":["$name"],"id":141},{"start":{"row":36,"column":86},"end":{"row":36,"column":91},"action":"insert","lines":["$name"]}],[{"start":{"row":32,"column":7},"end":{"row":32,"column":32},"action":"remove","lines":["ようこそ<?php echo $name ?>さん"],"id":142},{"start":{"row":32,"column":7},"end":{"row":32,"column":18},"action":"insert","lines":["名前を入力してください"]}],[{"start":{"row":15,"column":0},"end":{"row":16,"column":0},"action":"remove","lines":["",""],"id":143},{"start":{"row":14,"column":2},"end":{"row":15,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":29,"column":12},"end":{"row":29,"column":13},"action":"insert","lines":["i"],"id":145},{"start":{"row":29,"column":13},"end":{"row":29,"column":14},"action":"insert","lines":["f"]}],[{"start":{"row":29,"column":12},"end":{"row":29,"column":13},"action":"insert","lines":[" "],"id":146}],[{"start":{"row":29,"column":12},"end":{"row":29,"column":13},"action":"remove","lines":[" "],"id":147}],[{"start":{"row":29,"column":13},"end":{"row":29,"column":14},"action":"remove","lines":["f"],"id":148},{"start":{"row":29,"column":12},"end":{"row":29,"column":13},"action":"remove","lines":["i"]}],[{"start":{"row":29,"column":12},"end":{"row":29,"column":36},"action":"insert","lines":["(isset($query) === TRUE)"],"id":149}],[{"start":{"row":29,"column":34},"end":{"row":29,"column":35},"action":"remove","lines":["E"],"id":150},{"start":{"row":29,"column":33},"end":{"row":29,"column":34},"action":"remove","lines":["U"]},{"start":{"row":29,"column":32},"end":{"row":29,"column":33},"action":"remove","lines":["R"]},{"start":{"row":29,"column":31},"end":{"row":29,"column":32},"action":"remove","lines":["T"]}],[{"start":{"row":29,"column":31},"end":{"row":29,"column":32},"action":"insert","lines":["'"],"id":151},{"start":{"row":29,"column":32},"end":{"row":29,"column":33},"action":"insert","lines":["'"]}],[{"start":{"row":29,"column":12},"end":{"row":29,"column":13},"action":"insert","lines":[" "],"id":152}],[{"start":{"row":29,"column":12},"end":{"row":29,"column":13},"action":"remove","lines":[" "],"id":153}],[{"start":{"row":29,"column":12},"end":{"row":29,"column":13},"action":"insert","lines":["i"],"id":154},{"start":{"row":29,"column":13},"end":{"row":29,"column":14},"action":"insert","lines":["f"]}],[{"start":{"row":29,"column":14},"end":{"row":29,"column":15},"action":"insert","lines":["\\"],"id":155},{"start":{"row":29,"column":15},"end":{"row":29,"column":16},"action":"insert","lines":["\\"]}],[{"start":{"row":29,"column":15},"end":{"row":29,"column":16},"action":"remove","lines":["\\"],"id":156},{"start":{"row":29,"column":14},"end":{"row":29,"column":15},"action":"remove","lines":["\\"]},{"start":{"row":29,"column":13},"end":{"row":29,"column":14},"action":"remove","lines":["f"]},{"start":{"row":29,"column":12},"end":{"row":29,"column":13},"action":"remove","lines":["i"]}],[{"start":{"row":29,"column":24},"end":{"row":29,"column":25},"action":"remove","lines":["y"],"id":157},{"start":{"row":29,"column":23},"end":{"row":29,"column":24},"action":"remove","lines":["r"]},{"start":{"row":29,"column":22},"end":{"row":29,"column":23},"action":"remove","lines":["e"]},{"start":{"row":29,"column":21},"end":{"row":29,"column":22},"action":"remove","lines":["u"]},{"start":{"row":29,"column":20},"end":{"row":29,"column":21},"action":"remove","lines":["q"]}],[{"start":{"row":29,"column":20},"end":{"row":29,"column":21},"action":"insert","lines":["n"],"id":158},{"start":{"row":29,"column":21},"end":{"row":29,"column":22},"action":"insert","lines":["a"]},{"start":{"row":29,"column":22},"end":{"row":29,"column":23},"action":"insert","lines":["m"]},{"start":{"row":29,"column":23},"end":{"row":29,"column":24},"action":"insert","lines":["e"]}],[{"start":{"row":26,"column":18},"end":{"row":26,"column":19},"action":"remove","lines":["y"],"id":159},{"start":{"row":26,"column":17},"end":{"row":26,"column":18},"action":"remove","lines":["r"]},{"start":{"row":26,"column":16},"end":{"row":26,"column":17},"action":"remove","lines":["e"]},{"start":{"row":26,"column":15},"end":{"row":26,"column":16},"action":"remove","lines":["u"]},{"start":{"row":26,"column":14},"end":{"row":26,"column":15},"action":"remove","lines":["q"]}],[{"start":{"row":26,"column":14},"end":{"row":26,"column":15},"action":"insert","lines":["n"],"id":160},{"start":{"row":26,"column":15},"end":{"row":26,"column":16},"action":"insert","lines":["a"]},{"start":{"row":26,"column":16},"end":{"row":26,"column":17},"action":"insert","lines":["m"]},{"start":{"row":26,"column":17},"end":{"row":26,"column":18},"action":"insert","lines":["e"]}],[{"start":{"row":29,"column":12},"end":{"row":29,"column":13},"action":"insert","lines":["i"],"id":161},{"start":{"row":29,"column":13},"end":{"row":29,"column":14},"action":"insert","lines":["f"]}],[{"start":{"row":29,"column":33},"end":{"row":29,"column":34},"action":"remove","lines":["'"],"id":163},{"start":{"row":29,"column":32},"end":{"row":29,"column":33},"action":"remove","lines":["'"]}],[{"start":{"row":29,"column":32},"end":{"row":29,"column":33},"action":"insert","lines":["f"],"id":164},{"start":{"row":29,"column":33},"end":{"row":29,"column":34},"action":"insert","lines":["a"]}],[{"start":{"row":29,"column":34},"end":{"row":29,"column":35},"action":"insert","lines":["l"],"id":165},{"start":{"row":29,"column":35},"end":{"row":29,"column":36},"action":"insert","lines":["s"]},{"start":{"row":29,"column":36},"end":{"row":29,"column":37},"action":"insert","lines":["e"]}],[{"start":{"row":37,"column":1},"end":{"row":37,"column":2},"action":"remove","lines":[" "],"id":166},{"start":{"row":37,"column":0},"end":{"row":37,"column":1},"action":"remove","lines":[" "]},{"start":{"row":36,"column":10},"end":{"row":37,"column":1},"action":"remove","lines":[""," "]}],[{"start":{"row":25,"column":34},"end":{"row":26,"column":0},"action":"insert","lines":["",""],"id":167},{"start":{"row":26,"column":0},"end":{"row":26,"column":3},"action":"insert","lines":["   "]},{"start":{"row":26,"column":3},"end":{"row":27,"column":0},"action":"insert","lines":["",""]},{"start":{"row":27,"column":0},"end":{"row":27,"column":3},"action":"insert","lines":["   "]},{"start":{"row":27,"column":3},"end":{"row":28,"column":0},"action":"insert","lines":["",""]},{"start":{"row":28,"column":0},"end":{"row":28,"column":3},"action":"insert","lines":["   "]}],[{"start":{"row":26,"column":3},"end":{"row":28,"column":1},"action":"insert","lines":["if (!isset($_POST['email']) || $_POST['email'] === '') {","    $errors[] = 'Eメールアドレスが入力されていません';","}"],"id":169}],[{"start":{"row":26,"column":26},"end":{"row":26,"column":27},"action":"remove","lines":["l"],"id":170},{"start":{"row":26,"column":25},"end":{"row":26,"column":26},"action":"remove","lines":["i"]},{"start":{"row":26,"column":24},"end":{"row":26,"column":25},"action":"remove","lines":["a"]},{"start":{"row":26,"column":23},"end":{"row":26,"column":24},"action":"remove","lines":["m"]},{"start":{"row":26,"column":22},"end":{"row":26,"column":23},"action":"remove","lines":["e"]}],[{"start":{"row":26,"column":22},"end":{"row":26,"column":23},"action":"insert","lines":["n"],"id":171},{"start":{"row":26,"column":23},"end":{"row":26,"column":24},"action":"insert","lines":["a"]},{"start":{"row":26,"column":24},"end":{"row":26,"column":25},"action":"insert","lines":["m"]},{"start":{"row":26,"column":25},"end":{"row":26,"column":26},"action":"insert","lines":["e"]}],[{"start":{"row":26,"column":41},"end":{"row":26,"column":46},"action":"remove","lines":["email"],"id":172}],[{"start":{"row":26,"column":41},"end":{"row":26,"column":42},"action":"insert","lines":["n"],"id":173},{"start":{"row":26,"column":42},"end":{"row":26,"column":43},"action":"insert","lines":["a"]},{"start":{"row":26,"column":43},"end":{"row":26,"column":44},"action":"insert","lines":["m"]},{"start":{"row":26,"column":44},"end":{"row":26,"column":45},"action":"insert","lines":["e"]}],[{"start":{"row":29,"column":3},"end":{"row":29,"column":33},"action":"insert","lines":[" if (isset($query) === TRUE) {"],"id":175}],[{"start":{"row":29,"column":33},"end":{"row":30,"column":0},"action":"insert","lines":["",""],"id":176},{"start":{"row":30,"column":0},"end":{"row":30,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":30,"column":4},"end":{"row":30,"column":8},"action":"remove","lines":["    "],"id":177}],[{"start":{"row":30,"column":4},"end":{"row":31,"column":0},"action":"insert","lines":["",""],"id":178},{"start":{"row":31,"column":0},"end":{"row":31,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":31,"column":4},"end":{"row":31,"column":5},"action":"insert","lines":["}"],"id":179}],[{"start":{"row":31,"column":5},"end":{"row":32,"column":0},"action":"insert","lines":["",""],"id":180},{"start":{"row":32,"column":0},"end":{"row":32,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":29,"column":33},"end":{"row":29,"column":34},"action":"insert","lines":["?"],"id":181},{"start":{"row":29,"column":34},"end":{"row":29,"column":35},"action":"insert","lines":[">"]}],[{"start":{"row":30,"column":4},"end":{"row":30,"column":5},"action":"insert","lines":["<"],"id":182},{"start":{"row":30,"column":5},"end":{"row":30,"column":6},"action":"insert","lines":[">"]}],[{"start":{"row":30,"column":5},"end":{"row":30,"column":6},"action":"insert","lines":["@"],"id":183}],[{"start":{"row":30,"column":5},"end":{"row":30,"column":6},"action":"remove","lines":["@"],"id":184}],[{"start":{"row":30,"column":5},"end":{"row":30,"column":6},"action":"insert","lines":["p"],"id":185}],[{"start":{"row":30,"column":7},"end":{"row":30,"column":11},"action":"insert","lines":["ようこそ"],"id":186}],[{"start":{"row":30,"column":3},"end":{"row":30,"column":11},"action":"remove","lines":[" <p>ようこそ"],"id":187}]]},"ace":{"folds":[],"scrolltop":127,"scrollleft":0,"selection":{"start":{"row":30,"column":3},"end":{"row":30,"column":3},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1607322504799}