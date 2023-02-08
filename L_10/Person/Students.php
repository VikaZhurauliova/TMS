<?php

namespace L_10\Person;

class Students extends Greetings
{

    public function isAvailableTeacher(): bool
    {
        return false;
    }

    public function isAvailableStudent(): bool
    {
        return true;
    }

    public function isAvailableProgrammer(): bool
    {
        return false;
    }

    public function isAvailableStatus(): string
    {
        if ($this->isAvailableStudent()) {
            print_r('Hello, guys!');
        }
        return false;
    }
}