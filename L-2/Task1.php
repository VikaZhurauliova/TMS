<?php

$day = readline("day=");
if ($day > 0 && $day < 32) {
    if ($day > 0 && $day <= 10) {
        print_r('Первая декада');
    } elseif ($day > 10 && $day <= 20) {
        print_r('Вторая декада');
    } elseif ($day > 20 && $day <= 31) {
        print_r('Третья декада');
    }
}
