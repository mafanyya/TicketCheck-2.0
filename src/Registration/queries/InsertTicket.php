<?php

namespace Registration;

class InsertTicket
{
    public function __construct($newName, $newSurname, $newGender)
    {
        $this->newSurname = $newSurname;
        $this->newName = $newName;
        $this->newGender = $newGender;

    }

    public function insertPassengerData($connect)
    {

        $newPassenger= "INSERT INTO passengers (Last_Name,First_Name,Gender) VALUES ('$this->newSurname','$this->newName', '$this->newGender')";

        if(mysqli_query($connect,$newPassenger)){
            echo "...";
        } else{
            echo "ERROR: Could not able to execute $newPassenger. " . mysqli_error($connect);
        }
    }

}