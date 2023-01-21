<?php

$number = readline('');
$result = $number % 2;
parityCheck($result);

function parityCheck($result)
{
    if ($result === 0) {
        return ('Число чётное!');
    } else {
        return ('Число нечётное!');
    }
}

echo parityCheck($result);

