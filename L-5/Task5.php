<?php
$x='ghj3j5h7h3jgk2hg5f7gjiu3yg6bb4nkj3';
$symbolArray = str_split($x);
$newArray= array_unique($symbolArray);
$newString = implode($newArray);
$sumArray = count($symbolArray) - count($newArray);
print_r('Строка без повторение -'. ' '. $newString . ', количество удаленных символов - ' . $sumArray);