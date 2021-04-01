<?php include __DIR__ . '/parts/config.php'; ?>
<?php

$title = '我的主頁';

$people = [
    [
        'name' => 'Tim',
        'age' => 33,
        'gender' => 'male',
    ],
    [
        'name' => 'Joseph',
        'age' => 25,
        'gender' => 'male',
    ],
    [
        'name' => 'Cathy',
        'age' => 29,
        'gender' => 'female',
    ],
    [
        'name' => 'Sandy',
        'age' => 26,
        'gender' => 'female',
    ]
];

?>
<?php include __DIR__ . '/parts/html-head.php'; ?>
<?php include __DIR__ . '/parts/navbar.php'; ?>
<div class="container mt-5">
    <table class="table table-striped table-hover table-dark">
        <thead>
            <tr class="bg-danger">
                <th scope="col">Name</th>
                <th scope="col">Gender</th>
                <th scope="col">Age</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($people as $v) : ?>
                <tr>
                    <td><?= $v['name'] ?></td>
                    <td><?= $v['gender'] ?></td>
                    <td><?= $v['age'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>


</div>
<?php include __DIR__ . '/parts/scripts.php'; ?>
<?php include __DIR__ . '/parts/html-foot.php'; ?>