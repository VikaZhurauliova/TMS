<?php
$year = readline("Год ");
leapYear ($year);

function leapYear($year)
{
    If (($year % 4 == 0 && 100 != 0) || ($year % 400 == 0)) {
        return ('Високосный год!');
    }   else {
        return('Невисокосный год!');
    }
}
echo leapYear($year);

?>