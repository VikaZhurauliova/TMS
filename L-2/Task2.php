<?php
$a = readline("");
$b = pow ($a,6);
$c = $b % 5;
if ($c === 0) {
    print_r($b / 5);
} else{
    print_r('Число не кратно 5');
}