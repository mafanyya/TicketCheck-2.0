<?php

namespace Registration;

class RegSeat
{
    protected int $seat;

    public function __toString(): string
    {
        // TODO: Implement __toString() method.
        return $this->seat;

    }

    public function regSeat():void
    {
        echo("Choose a seat (1 - 50)").PHP_EOL;

        $seat = fgets(STDIN);
        $this->seat = $seat;

        $this->isValid();

    }
    public function isValid():bool
    {
        if(is_numeric($this->seat)){
            if($this->seat >= 1 & $this->seat <= 50 ){
                return true;
            }else{
                echo("Value is invalid! ");
                $this->regSeat();
                return false;
            }
        }else{
            echo("Value is invalid! ");
            $this->regSeat();
            return false;
        }
    }

    public function getSeat():string
    {
        return $this->seat;
    }

}