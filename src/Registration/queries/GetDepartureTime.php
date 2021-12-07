<?php

namespace Registration;

class GetDepartureTime
{
    public function __construct($newTrain)
    {
        $this->newTrain = $newTrain;
    }

    public function __toString(): string
    {
        return $this->departureTime;
    }

    public function setDepartureTime($connect): void
    {
        $q = "SELECT Departure_Time FROM trains where Train_Nr = '$this->newTrain'";
        $departureTime = mysqli_query($connect, $q);

        $row = mysqli_fetch_assoc($departureTime);

        $departureTime = $row['Departure_Time'];
        $this->departureTime = $departureTime;

    }

    public function getDepartureTime(): string
    {
        return $this->departureTime;
    }

}