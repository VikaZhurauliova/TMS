<?php
//Сделать валидацию на пароль (не обязательно) нужно использовать просмотр наперед (не проходили)
$string = readline('');
$result = preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#_\-$&*])(?=.*[0-9]).{6,}$/i', $string);
if ($result == 1){
    print_r('Пароль валидный.');
} else {
    print_r('Ошибка!');
}