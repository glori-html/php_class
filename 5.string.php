<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String</title>
</head>

<body>
    <?php

    // <<<(Heredoc)表示法
    $a = "PHP - MySQL";
    $b = <<<HDOC
<br>
<h1>PHP -</h1>
<div style="color:#F00;">MySQL</div>
HDOC;
    echo $a;
    echo $b;

    ?>
</body>

</html>