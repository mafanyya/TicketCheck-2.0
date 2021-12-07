<?php

namespace Checking;

class CheckHash
{
    public function __construct($hash)
    {
        $this->hash = $hash;
    }

    public function __toString(): string
    {
        return $this->isCorrect;
    }


    public function isCorrect($connect): void
    {
        $hash = "91032ad7bbcb6cf72875e8e8207dcfba80173f7b";

        $q = "SELECT IF(COUNT(*) >0, 1, 0) as Hash FROM booking WHERE Hash = '$this->hash'";
        $isCorrect = mysqli_query($connect, $q);

        $row = mysqli_fetch_assoc($isCorrect);

        $isCorrect = $row['Hash'];
        $this->isCorrect = $isCorrect;

        var_dump($isCorrect);


    }

    public function getIsCorrect():string
    {
        return $this->isCorrect;
    }


}