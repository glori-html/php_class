<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET參數 = Query String</title>
</head>

<body>
    <?php

    // 沒有在網頁輸入a 跟 b的值則會得到NOTICE

    echo $_GET['a'] + $_GET['b'];
    // 測試網頁之後http://localhost/php_project/8.get.php?a=12&b=24，輸入?a=12&b=24 才進行運算 輸出36
    ?>
</body>

</html>