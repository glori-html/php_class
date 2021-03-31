<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>邏輯運算子</title>
</head>

<body>
    <?php

    echo 5 || 7; // 輸出 1 (boolean布林值) 只要前面為true, 後面則不做運算
    echo '<br>';

    $a = 5 or $b = 6; // or 的優先權比 = 還低
    $c = 5 || $d = 6; // || 的優先權比 = 還高

    //以下都會輸出錯誤
    echo "\$a=$a, \$b=$b <br>"; // 輸出 $a = 5, $b ="" 空 False
    echo "\$c=$c, \$d=$d <br>"; // 輸出 $c = 1 (true), $d ="" 空 False
    ?>
</body>

</html>