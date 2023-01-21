<?php

$string = 'jh4k k9dhj3j4j6 kj3dij9m 3j5k7';
$symbolArray = str_split($string);
$digits = [1, 2, 3, 4, 5, 6, 7, 8, 9, 0];
$k = array_intersect($symbolArray, $digits);
$arrSum = array_sum($k);
print_r('Цифры найдены' . ' ' . count($k) . ' раз.' ."\n");
print_r('Сумма цифр -' . ' ' . $arrSum . '.');

?>