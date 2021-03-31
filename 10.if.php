<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if else</title>
</head>

<body>
    <h2><?= isset($_GET['age']) ? "年齡: {$_GET['age']}" : "沒有給年齡" ?></h2>
    <?php
    if (isset($_GET['age']) && intval($_GET['age']) >= 18) {
    ?>
        <img src="./imgs/bread-6.jpg" alt="">
    <?php
    } else {
    ?>
        <img src="./imgs/bread-6b.jpg" alt="">
    <?php
    }
    ?>
</body>

</html>