<?php

namespace Registration;

class RegTrain
{
    protected string $train;

    public function __toString(): string
    {
        return $this->train;
    }

    public function regTrain(): void
    {
        echo ("Enter train number (1,2,3,4,5):
1 - Slupsk-Warszawa
2 - Slupsk-Gdansk
3 - Slupsk-Olsztyn
4 - Slupsk-Koszalin
5 - Slupsk-Szczecin
        ") . PHP_EOL;
        $train = fgets(STDIN);
        $this->train = $train;
        $this->isValid();
    }

    public function isValid(): bool
    {
        if ($this->train > 0 & $this->train <= 5) {
            return true;
        } else {
            echo("Value is invalid! ");
            $this->regTrain();
            return false;

        }

    }

    public function getTrain(): string
    {
        return $this->train;

    }

}