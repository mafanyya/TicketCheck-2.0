<?php

namespace Registration;

class GetPassengerID
{
    protected \mysqli_result $passengerID;

    public function __construct()
    {
    }

    public function setPassengerID($connect)
    {
        $selectId= "SELECT MAX(Passenger_id) FROM passengers";
        $passengerID = mysqli_query($connect,$selectId);

        $row = mysqli_fetch_assoc($passengerID);

        $passenger_id = $row['MAX(Passenger_id)'];
        $this->passengerID = $passengerID;
    }
    public function getPassengerID()
    {
        return $this->passengerID;
    }

}