<?php
$year = readline("year ");

if (($year % 4 === 0 && $year % 100 != 0) || ($year % 400 === 0)){
    print_r('Високосный ujl ');
} else {
    print_r('Невисокосный год');
}