<?php
//Ввести в консоль название сайта полностью 'http://test.com' , определить является ли сайт защищенным или нет.

$nameOfSite = readline('Введите название сайта -');

if (str_starts_with($nameOfSite, 'https')){
    print_r('Сайт защищён!');
} else {
    print_r('Сайт не защищён!');
}


