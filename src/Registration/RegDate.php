<?php

namespace Registration;

class RegDate
{
    protected string $month;
    protected string $day;
    protected string $year;
    protected string $date;

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return $this->date;
    }

    public function regDate(): void
    {
        echo ("Enter date:") . PHP_EOL;

        echo ("Day:") . PHP_EOL;
        $day = (int)fgets(STDIN);

        echo ("Month:") . PHP_EOL;
        $month = (int)fgets(STDIN);

        $year = date("Y");

        $this->day = $day;
        $this->month = $month;
        $this->year = $year;
        $this->isValid();
    }

    public function isValid(): bool
    {
        if (checkdate($this->month, $this->day, $this->year) & $this->month!= NULL & $this->day!= NULL & $this->year!= NULL) {
            if($this->month <=9){
                $this->month = "0$this->month";
            }
            if($this->day <=9){
                $this->day = "0$this->day";
            }
            return true;
        } else {
            echo ("Error, please enter the correct value") . PHP_EOL;
            $this->regDate();
            return false;

        }
    }

    public function getDate():string
    {
        $this->date = "$this->year-$this->month-$this->day";
        return $this->date;
    }

}