<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intro</title>
</head>

<body>
    <?php

    define('MY_CONSTANT', '3.14');
    echo MY_CONSTANT;

    echo __DIR__; //顯示檔案位置
    echo '<br>';
    echo __FILE__; //顯示檔案名稱
    echo '<br>';
    echo __LINE__; //偵測在code的第幾行(多數用來Debug)
    echo '<br>';
    ?>
</body>

</html>