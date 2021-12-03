<?php

namespace Registration;

class RegSurname
{
    protected string $surname;

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return $this->surname;
    }



    public function regSurname(): void
    {
        echo ("Enter your surname:") . PHP_EOL;
        $surname = fgets(STDIN);

        $this->surname = $surname;
        $this->isValid();
    }

    public function isValid(): bool
    {
        if (preg_match("/[a-z-]/", $this->surname) & $this->surname!= NULL) {
            return true;
        } else {
            echo("Error! Enter a correct value!").PHP_EOL;
            $this->regSurname();
            return false;


        }
    }

    public function getSurname(): string
    {
        return $this->surname;
    }

}