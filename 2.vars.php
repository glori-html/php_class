<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>變數</title>
</head>

<body>
    <?php

    //  echo 或 print 都是一種指定
    // php 只做數值的相加

    $my_var = 66;
    $b = '22';
    $c = 'abc';

    echo $my_var + $b; //88
    echo '<br />';
    echo $my_var + $c; //如果認不出數值, 會發生錯誤 但還是會輸出66
    ?>
</body>

</html>