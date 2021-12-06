<?php

namespace Registration;

class RegGender
{
    protected string $gender;

    public function __toString(): string
    {
        return $this->gender;
    }

    public function regGender(): void
    {
        echo ("Enter your gender (Man - 1, Female - 2):") . PHP_EOL;
        $gender = fgets(STDIN);

        $this->gender = strtolower($gender);
        $this->isValid();
    }

    public function isValid(): void
    {
        switch ($this->gender) {
            case 1:
                $this->gender = "M";
                break;
            case 2:
                $this->gender = "F";
                break;
            default:
                echo("Value is invalid! ");
                $this->regGender();
                break;
        }
    }

    public function getGender(): string
    {
        return $this->gender;
    }

}