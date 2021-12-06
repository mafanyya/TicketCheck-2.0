<?php

namespace Registration;

class GetPassengerID
{
   public int $passengerID;

    public function __construct()
    {
    }

    public function __toString():string
    {
        // TODO: Implement __toString() method.
        return $this->passengerID;
    }

    public function setPassengerID($connect)
    {
        $selectId= "SELECT MAX(Passenger_id) FROM passengers";
        $passengerID = mysqli_query($connect,$selectId);

        $row = mysqli_fetch_assoc($passengerID);

        $passengerID = $row['MAX(Passenger_id)'];
        $this->passengerID = $passengerID;
    }
    public function getPassengerID():int
    {
        return $this->passengerID;
    }

}