<?php
$numberOfDay = date('w');
$nowTime = time();
$closeTime = mktime(21,0,0);
$openTime = mktime(9, 0, 0);
$hoursCloseLeft = gmdate("G:i", $closeTime - $nowTime);
$hoursOpenLeft = gmdate('G:i', $openTime - $nowTime);


if ($numberOfDay == 0 || $numberOfDay == 6) {
    print_r('Выходной!');
} elseif (($numberOfDay > 0 && $numberOfDay < 6) && ($nowTime >= $openTime && $nowTime < $closeTime)) {
    print_r('Магазин работает. Закроется через' . ' ' . $hoursCloseLeft);
} elseif (($numberOfDay = 5) && ($nowTime > $closeTime)) {
    print_r('Магазин не работает. Откроется в понедельник в 09:00');
} elseif (($numberOfDay > 0) && ($numberOfDay < 5) && $nowTime > $closeTime) {
    print_r('Магазин не работает. Откроется в 09:00');
}
