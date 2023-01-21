<?php

echo formattedWord('128', 'товар', 'товара', 'товаров');

function formattedWord(int $number, $oneElement, $twoToFour, $elevenToTwenty): string
{
    if ($number >= 11 && $number <= 14) {
        return ($number . " " . $elevenToTwenty);
    } else if ($number % 10 == 1) {
        return ($number . " " . $oneElement);
    } else if ($number % 10 == 2 || $number % 10 == 3 || $number % 10 == 4) {
        return ($number . " " . $twoToFour);
    } else {
        return ($number . " " . $elevenToTwenty);
    }
}



/*$number = readline('Введите количество - ');
$oneElement = readline('Введите первое значение - ');
$twoToFour = readline('Введите второе значение - ');
$elevenToTwenty = readline('Введите третье значение - ');

function formattedWord (int $number, string $oneElement, string $twoToFour, string $elevenToTwenty ) {

    if ($number == 1 || $number == 21 ) {
        return($number . " " . $oneElement);
    } else if (($number >= 11 && $number <= 20) || ($number >= 25 && $number <31)) {
        return($number . " " . $elevenToTwenty);
    } else if (($twoToFour >= 2 && $twoToFour <= 4) || ($number >= 22 && $number <25)) {
        return($number . " " . $twoToFour);
    } else {
        return ('К сожалению, нет в наличии.');
    }
}
echo formattedWord ($number, $oneElement, $twoToFour, $elevenToTwenty );*/