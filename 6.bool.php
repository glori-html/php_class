<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>關係運算子 relational operator</title>
</head>

<body>
    <?php
    $a = 1;
    $b = $a++;
    echo $b; //輸出 1
    echo '<br />';
    echo $a; //輸出 2

    echo '<br />';
    $a = 1;
    $b = ++$a;
    echo $b; //輸出 2
    echo '<br />';
    echo $a; //輸出 2

    echo '<br />';

    echo true ? "True" : "False";
    ?>
</body>

</html>