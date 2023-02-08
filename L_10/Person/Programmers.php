<?php

namespace L_10\Person;

class Programmers extends Greetings
{

    public function isAvailableTeacher(): bool
    {
        return false;
    }

    public function isAvailableStudent(): bool
    {
        return false;
    }

    public function isAvailableProgrammer(): bool
    {
        return true;
    }

    public function isAvailableStatus(): string
    {
        if ($this->isAvailableProgrammer()) {
            print_r('Hello, users!');
        }
        return false;
    }
}