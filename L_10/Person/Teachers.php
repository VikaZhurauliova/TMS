<?php

namespace L_10\Person;

class Teachers extends Greetings
{

    public function isAvailableTeacher(): bool
    {
        return true;
    }

    public function isAvailableStudent(): bool
    {
        return false;
    }

    public function isAvailableProgrammer(): bool
    {
        return false;
    }

    public function isAvailableStatus(): string
    {
        if ($this->isAvailableTeacher()) {
           print_r('Hello, student!');
        }
        return false;
    }
}