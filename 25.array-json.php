<?php
$people = [
    [
        'name' => 'Bill',
        'age' => 27,
        'gender' => 'male',
    ],
    [
        'name' => '大衛',
        'age' => 25,
        'gender' => 'male',
    ],
    [
        'name' => 'Flora',
        'age' => 22,
        'gender' => 'female',
    ],
    [
        'name' => 'Mary',
        'age' => 28,
        'gender' => 'female',
    ]
];

echo json_encode($people, JSON_UNESCAPED_UNICODE); //將json轉成字串，字串轉回json用decode
// json字串必須用雙引號，不可以有註解