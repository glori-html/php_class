<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="get">
    <input type="number" name="score" value="<?= $_GET['score'] ?? '' ?>">
    <input type="submit">
</form>

<?php if(isset($_GET['score'])){
    $s = intval($_GET['score']);


    echo $s;

} ?>




</body>
</html>