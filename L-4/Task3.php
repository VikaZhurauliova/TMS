<?php
//Задание, имеется массив разрешенных расширений для файла .jpg .jpeg .png .svg
//ввести название файла в консоль и вывести результат является ли изображение валидным.

$arrayList = ['.jpg', '.jpeg', '.png', '.svg'];
$string = readline('');
$newString = strrchr($string, '.');
valid($newString, $arrayList);
function valid($newString, $arrayList){
    if (in_array($newString, $arrayList)) {
        echo 'Изображение валидное!';
    } else {
        echo 'Ошибка';
    }
}

