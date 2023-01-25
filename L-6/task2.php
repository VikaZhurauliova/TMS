<?php
//регулярное выражение на проверку email, проверить как можно больше тестов, обосновать

$string = readline('');
$result = preg_match('/^([a-z0-9-_\.]{2,20}@[a-z]{2,}\.[a-z]{2,4})$/i', $string);
if ($result == 1){
    print_r('Email валидный.');
} else {
    print_r('Ошибка!');
}
