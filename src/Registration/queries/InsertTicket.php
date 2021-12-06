<?php

namespace Registration;

class InsertTicket
{
    public function __construct($newDate, $newTrain, $newSeat, $newDiscount, $newPassengerID, $newHash, $currentTime)
    {
       $this->newDate = $newDate;
       $this->newTrain = $newTrain;
       $this->newSeat = $newSeat;
       $this->newDiscount = $newDiscount;
       $this->newPassengerID = $newPassengerID;
       $this->newHash = $newHash;
       $this->currentTime = $currentTime;

    }

    public function insertTicketData($connect)
    {


        $newTicket= "INSERT INTO booking (Train_Nr, Passenger_id, Date, Discount_id, Seat, Hash, Registration_Time)
        VALUES ('$this->newTrain', '$this->newPassengerID', '$this->newDate', '$this->newDiscount','$this->newSeat','$this->newHash','$this->currentTime')";

        if(mysqli_query($connect,$newTicket)){
            echo "...";
        } else{
            echo "ERROR: Could not able to execute $newTicket. " . mysqli_error($connect);
        }
    }

}