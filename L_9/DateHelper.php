<?php

namespace L_9;

class DateHelper
{
    public function getNextDay(int $timestamp = null, string $date = 'd.m.Y'): string
    {
        $currentTime = $timestamp ?: time();
        $nowDay = date('w', $currentTime);

        if ($nowDay < 5) {
            $addDay = 1;
        } else if ($nowDay == 5) {
            $addDay = 3;
        } else {
            $addDay = 2;
        }

        return date($date, $currentTime + ($addDay * 60 * 60 * 24));
    }
    public function untilNextBirthday (int $day, int $month): float
    {
        $nowDay = time();
        $birthday = mktime(hour: 0, month: $month, day: $day);
        $dateDiff = $birthday - $nowDay;
        $amountDay = ceil($dateDiff / (60 * 60 * 24));
            if ($amountDay > 0) {
                return $amountDay;
            } else {
                return 365 + $amountDay;
            }
        }
    }
$dateTimeHelper = new DateHelper();
$nextWorkDay = $dateTimeHelper->getNextDay();
/*print_r($nextWorkDay);*/

$nextBirthday = $dateTimeHelper->untilNextBirthday(27, 10);
print_r($nextBirthday);