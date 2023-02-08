<?php
namespace L_10\Person;
abstract  class Greetings
{

    public bool $hasTeacherCard;
    public bool $hasStudentCard;
    public bool $hasProgrammerCard;

    public function __construct (bool $hasTeacherCard, bool $hasStudentCard, bool $hasProgrammerCard){


        $this->hasTeacherCard = $hasTeacherCard;
        $this->hasStudentCard = $hasStudentCard;
        $this->hasProgrammerCard = $hasProgrammerCard;
    }
    abstract public function isAvailableTeacher() : bool;
    abstract public function isAvailableStudent() : bool;
    abstract public function isAvailableProgrammer() : bool;

    abstract public function isAvailableStatus() : string;

}