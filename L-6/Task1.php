<?php
//Проверка на белорусские автомобильные номера

$string = readline('');
$result = preg_match('/^([0-9]{4}[ABEIKMHOPCTX]{2}-[0-7])$|^([0-7][ABEIKMHOPCTX]{2}T[0-9]{4})$|^([ABEIKMHOPCTX][0-9]{3}[ABEIKMHOPCTX]{2}-[0-7])$/i', $string);
if ($result == 1){
    print_r('Найдено совпадение');
} else {
    print_r('Совпадений не найдено');
}
