{"filter":false,"title":"practice_loop_elementary.php","tooltip":"/htdocs/php08/practice_loop_elementary.php","undoManager":{"mark":8,"position":8,"stack":[[{"start":{"row":0,"column":0},"end":{"row":38,"column":7},"action":"insert","lines":["$times = array(10, 100, 1000);","$heads = 0;","$tails = 0;","if (isset($_POST['num']) === TRUE) {","    $num = htmlspecialchars($_POST['num'], ENT_QUOTES, 'UTF-8');","        for ($i = 0; $i < $num; $i++) {","            $rand = mt_rand(0,1);","            if ($rand === 0) {","                $heads++;","            } else {","                $tails++;","            }","        }","}","?>","<!DOCTYPE HTML>","<html lang=\"ja\">","<head>","   <meta charset=\"UTF-8\">","   <title>head or tail</title>","<body>","    <p>表:<?php if (isset($_POST['num']) === TRUE) { echo $heads; } ?>回</p>","    <p>裏:<?php if (isset($_POST['num']) === TRUE) { echo $tails; } ?>回</p>","    <form method=\"get\">","        <select name=\"num\">","            <option>回数選択</option>","<?php","foreach($times as $value) {","?>            ","            <option name=\"num\" value=\"<?php echo $value; ?>\"><?php echo $value.\"\\n\"; ?></option>","<?php","}","?>","        </select>","            <span>回</span>","            <button type=\"submit\">コイントス</button>","    </form>","    </body>","</html>"],"id":1}],[{"start":{"row":0,"column":0},"end":{"row":1,"column":0},"action":"insert","lines":["",""],"id":2}],[{"start":{"row":0,"column":0},"end":{"row":0,"column":1},"action":"insert","lines":["<"],"id":3},{"start":{"row":0,"column":1},"end":{"row":0,"column":2},"action":"insert","lines":["?"]},{"start":{"row":0,"column":2},"end":{"row":0,"column":3},"action":"insert","lines":["p"]}],[{"start":{"row":0,"column":3},"end":{"row":0,"column":4},"action":"insert","lines":["h"],"id":4},{"start":{"row":0,"column":4},"end":{"row":0,"column":5},"action":"insert","lines":["p"]}],[{"start":{"row":1,"column":5},"end":{"row":1,"column":6},"action":"remove","lines":["s"],"id":5}],[{"start":{"row":0,"column":0},"end":{"row":39,"column":7},"action":"remove","lines":["<?php","$time = array(10, 100, 1000);","$heads = 0;","$tails = 0;","if (isset($_POST['num']) === TRUE) {","    $num = htmlspecialchars($_POST['num'], ENT_QUOTES, 'UTF-8');","        for ($i = 0; $i < $num; $i++) {","            $rand = mt_rand(0,1);","            if ($rand === 0) {","                $heads++;","            } else {","                $tails++;","            }","        }","}","?>","<!DOCTYPE HTML>","<html lang=\"ja\">","<head>","   <meta charset=\"UTF-8\">","   <title>head or tail</title>","<body>","    <p>表:<?php if (isset($_POST['num']) === TRUE) { echo $heads; } ?>回</p>","    <p>裏:<?php if (isset($_POST['num']) === TRUE) { echo $tails; } ?>回</p>","    <form method=\"get\">","        <select name=\"num\">","            <option>回数選択</option>","<?php","foreach($times as $value) {","?>            ","            <option name=\"num\" value=\"<?php echo $value; ?>\"><?php echo $value.\"\\n\"; ?></option>","<?php","}","?>","        </select>","            <span>回</span>","            <button type=\"submit\">コイントス</button>","    </form>","    </body>","</html>"],"id":6}],[{"start":{"row":0,"column":0},"end":{"row":63,"column":7},"action":"insert","lines":["<?php","// 表の変数","$front = 0;","// 裏の変数","$back = 0;","","//この処理が進まない","// 表裏の抽選","if(isset($_POST[\"10\"]) === true) {","    // 10回","    for($i = 1; $i <= 10; $i++) {","        $rand = rand(0, 1);","        if($rand === 0) {","            $front++;","        }else if($rand === 1) {","            $back++;","        }","    }","}else if(isset($_POST[\"100\"]) === true) {","    // 100回","    for($i = 1; $i <= 100; $i++) {","        $rand = rand(0, 1);","        if($rand === 0) {","            $front++;","        }else if($rand === 1) {","            $back++;","        }","    }","}else if(isset($_POST[\"1000\"]) === true) {","    // 1000回","    for($i = 1; $i <= 1000; $i++) {","        $rand = rand(0, 1);","        if($rand === 0) {","            $front++;","        }else if($rand === 1) {","            $back++;","        }","    }","}","?>","<!DOCTYPE html>","<html lang=\"ja\">","<head>","    <meta charset=\"UTF-8\">","    <title>コイントス</title>","</head>","<body>","    <article id=\"wrap\">","        <section>","            <p>表: <?php if(isset($_POST['submit'])=== true) { print $front;} ?>回</p>","            <p>裏: <?php if(isset($_POST['submit'])=== true) { print $back;} ?>回</p>","        </section>","        <form method=\"post\">","            <select name=\"number\">","                <option value=\"\">回数選択</option>","                <option name=\"10\" value=\"10\">10</option>","                <option name=\"100\" value=\"100\">100</option>","                <option name=\"1000\" value=\"1000\">1000</option>","            </select>回","            <button name=\"submit\" type=\"submit\">コイントス</button>","        </form>","    </article>","</body>","</html>"],"id":7}],[{"start":{"row":6,"column":0},"end":{"row":38,"column":1},"action":"remove","lines":["//この処理が進まない","// 表裏の抽選","if(isset($_POST[\"10\"]) === true) {","    // 10回","    for($i = 1; $i <= 10; $i++) {","        $rand = rand(0, 1);","        if($rand === 0) {","            $front++;","        }else if($rand === 1) {","            $back++;","        }","    }","}else if(isset($_POST[\"100\"]) === true) {","    // 100回","    for($i = 1; $i <= 100; $i++) {","        $rand = rand(0, 1);","        if($rand === 0) {","            $front++;","        }else if($rand === 1) {","            $back++;","        }","    }","}else if(isset($_POST[\"1000\"]) === true) {","    // 1000回","    for($i = 1; $i <= 1000; $i++) {","        $rand = rand(0, 1);","        if($rand === 0) {","            $front++;","        }else if($rand === 1) {","            $back++;","        }","    }","}"],"id":9}],[{"start":{"row":6,"column":0},"end":{"row":17,"column":1},"action":"insert","lines":["if (isset($_POST['number'])) {","    $num = $_POST['number'];","","    for($i = 1; $i <= $num; $i++) {","        $rand = rand(0, 1);","        if($rand === 0) {","            $front++;","        }else if($rand === 1) {","            $back++;","        }","    }","}"],"id":10}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":32,"column":27},"end":{"row":32,"column":27},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1608957539460,"hash":"ad79d93639f3d79f49a425e32e331434e4b69db3"}