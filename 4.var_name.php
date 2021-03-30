<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>變數名稱</title>
</head>

<body>
    <?php

    $name = "Victor";
    echo "Hello, $name"; //輸出 Hello, Victor
    echo '<br />';
    echo "Hello, $name 123"; //輸出 Hello, Victor 123
    echo '<br />';
    echo "Hello, {$name}123"; //輸出 Hello, Victor123
    echo '<br />';
    echo "Hello, ${name}123"; //輸出 Hello, Victor123
    ?>
</body>

</html>