<?php

namespace Registration;

class RegDiscount
{
    protected string $discount;

    public function __toString():string
    {
        return $this->discount;
    }

    public function isDiscount(): bool
    {
        echo("Do you have a discount on travel?
1 - YES
2 - NO").PHP_EOL;

        $isDiscount = fgets(STDIN);


        switch ($isDiscount){
            case 1:
                $this->regDiscount();
                return true;
            case 2:
                $this->discount = 5;
                return false;
            default:
                echo("Value is invalid! ");
                $this ->isDiscount();
                return false;

        }

    }

    public function regDiscount():void
    {
        echo("What discount do you have?
1 - Student 
2 - Senior citizen
3 - Kid (under 3 year)
4 - Disabled person
        ").PHP_EOL;

        $discount = fgets(STDIN);
        $this->discount = $discount;
        $this->isValid();

    }

    public function isValid():void
    {
        switch($this->discount){
            case 1: $this->discount = 1;
                break;
            case 2: $this->discount = 2;
                break;
            case 3: $this->discount = 3;
                break;
            case 4: $this->discount = 4;
                break;
            default:
                echo("Value is invalid! ");
                $this->regDiscount();
                break;
        }
    }

    public function getDiscount():string
    {
        return $this->discount;
    }

}