<?php

use L_10\Person\Programmers;
use L_10\Person\Teachers;
use L_10\Person\Students;


require_once 'Greetings.php';
require_once 'Teachers.php';
require_once 'Students.php';
require_once 'Programmers.php';

$teacher = new Teachers(true, false,false);
print_r($teacher -> isAvailableStatus());

$student = new Students(false, true, false);
print_r($student -> isAvailableStatus());

$programmer = new Programmers(false, false,true);
print_r($programmer -> isAvailableStatus());



