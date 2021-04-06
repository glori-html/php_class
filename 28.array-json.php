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

// header('Content-Type: application/json');

echo json_encode([
    'get' => $_GET,
    'persons' => $people
], JSON_UNESCAPED_UNICODE);

// 將json轉成字串用encode，字串轉回json用decode
// json字串必須用雙引號，不可以有註解
// 在JavaScript要將json轉成字串使用JSON.stringify(變數)
// 將字串轉回物件使用JSON.parse(str) 需要先定義str = "字串"