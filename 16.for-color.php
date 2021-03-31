<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        td {
            width: 50px;
            height: 50px;
        }
    </style>
</head>

<body>

    <table border="1">
        <?php for ($i = 0; $i < 10; $i++) : ?>
            <tr>
                <?php for ($k = 0; $k < 10; $k++) : ?>
                    <td><?= ($i + 1) * ($k + 1) ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>


    <table>
        <?php for ($i = 0; $i < 16; $i++) : ?>
            <tr>
                <?php for ($k = 0; $k < 16; $k++) : ?>
                    <td style="background-color: #<?= sprintf('%X%X%', $i, $i) ?>0000;">&nbsp;</td>
                    <td style="background-color: #<?= sprintf('%X%X', $k, $k) ?>0000;">&nbsp;</td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>

</body>

</html>