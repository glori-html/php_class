<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empty</title>
</head>

<body>
    <?php

    // intval() 轉換成整數 -------------- = JavaScript 的 parseInt()
    // floatval() 轉換成浮點數 ---------- = JavaScript 的 parseFloat()
    // stringval() 轉換成字串 

    $a = empty($_GET['a']) ? 0 : intval($_GET['a']);
    $b = empty($_GET['b']) ? 0 : intval($_GET['b']);
    echo ($a + $b) . '<br>'; //輸出 0 . 是做字串相接， + 是做數值運算

    $c = [];
    echo empty($c) ? '空的' : '不是'; // 輸出 空的
    ?>
</body>

</html>