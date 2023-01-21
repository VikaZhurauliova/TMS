<?php
//Задание, имеем массив пользователей, и информацию о том, когда он последний раз менял пароль,
// те кто последние три месяца не меняли пароль нужно его сгенерировать и обновить
$users = [
    [
        'name' => 'VikaZhurauliova',
        'password' => 'vvhTRh6$f_jb',
        'updated_password_at' => '02.01.2023'
    ],
    [
        'name' => 'LenaIvanova',
        'password' => '%&&gdmUt64(^',
        'updated_password_at' => '30.10.2022'
    ],
    [
        'name' => 'VanyaGolovach',
        'password' => '45sfgUY%hg#%89',
        'updated_password_at' => '05.08.2022'
    ]
];
foreach ($users as &$user) {
    $diffTime = time() - strtotime($user ['updated_password_at']);
    $needUpdate = $diffTime /(60*60*24);
    if ($needUpdate > 90) {
        $user['password'] = 'Need password update';
        $user ['New password'] = &$newPassword;
    }
}

$specialSymbols = ['#', '$', '%', '^', '&', '*', '(', ')'];
$keysSymbols = array_rand($specialSymbols, 2);

$digits =['1', '2', '3', '4', '5', '6', '7', '8', '9', '0'];
$keysDigits = array_rand($digits, 2);

$letters = 'qwertyuiopasdfghjklzxcvbnmQWERTYUIOPSDFGHJKLZXCVBNM';
$lettersArray = str_split($letters);
$keyLetters = array_rand($lettersArray,4);

$newPassword = str_shuffle($lettersArray[$keyLetters[0]] . $lettersArray[$keyLetters[1]] . $lettersArray[$keyLetters[2]] . $lettersArray[$keyLetters[3]] . $specialSymbols[$keysSymbols[0]] . $specialSymbols[$keysSymbols[1]] . $digits[$keysDigits[0]]  .  $digits[$keysDigits[1]]);
print_r($users);