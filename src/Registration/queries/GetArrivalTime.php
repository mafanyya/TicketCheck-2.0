<?php

namespace Registration;

class GetArrivalTime
{
    public function __construct($newTrain)
    {
        $this->newTrain = $newTrain;
    }

    public function __toString(): string
    {
        return $this->arrivalTime;
    }

    public function setArrivalTime($connect): void
    {
        $q = "SELECT Arrival_Time FROM trains where Train_Nr = '$this->newTrain'";
        $arrivalTime = mysqli_query($connect, $q);

        $row = mysqli_fetch_assoc($arrivalTime);

        $arrivalTime = $row['Arrival_Time'];
        $this->arrivalTime = $arrivalTime;

    }

    public function getArrivalTime(): string
    {
        return $this->arrivalTime;
    }

}