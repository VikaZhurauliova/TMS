<?php

$year = date('L');
echo leapYear ($year);

function leapYear($year ) {
    if ($year == 1) {
        return('Високосный год');
    } else {
        return('Невисокосный год');
    }
}
