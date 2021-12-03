<?php

namespace Registration;

class RegName
{
    protected string $name;

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return $this->name;
    }

    public function regName(): void
    {
        echo ("Enter your name:") . PHP_EOL;
        $name = fgets(STDIN);

        $this->name = $name;
        $this->isValid();
    }

    public function isValid(): bool
    {
        if (preg_match("/[a-z-]/", $this->name) & $this->name != NULL) {
            return true;
        } else {
            echo("Error! Enter a correct value!").PHP_EOL;
            $this->regName();
            return false;


        }
    }

    public function getName(): string
    {
        return $this->name;
    }

}