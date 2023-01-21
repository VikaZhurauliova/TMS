<?php
//Задание, реализовать валидацию пароля
// 1) должен содержать заглавную
// 2) должен содержать спец символ
// 3) больше 8 символов
// 4) чтоб имел минимум 1 букву

$password ='d5gTmk&me%uiY';

$passwordArray = str_split($password);
$isValidLength = strlen($password) >= 8;

$specialSymbols = ['#', '$', '%', '^', '&', '*', '(', ')'];
$intersectSpecialSymbol = array_intersect($passwordArray, $specialSymbols);

$letters = 'qwertyuiopasdfghjklzxcvbnm';
$lettersArray = str_split($letters);
$intersectLetters = array_intersect($passwordArray, $lettersArray);

$capitalLetter = match (true) {
    (strtolower($password) != $password) => true,
};

if ($isValidLength &&$intersectSpecialSymbol  && $intersectLetters && $capitalLetter) {
    print_r('valid');
} else {
    print_r('no valid');
}


