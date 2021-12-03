<?php
namespace Registration;


class InsertPassengerData
{
    public function insertPassengerData($connect)
    {
        $newSurname = new RegSurname();
        $newSurname->getSurname();

        $newName = new RegName();
        $newName->getName();

        $newGender = new RegGender();
        $newGender->getGender();



        $newPassenger= "INSERT INTO passengers (Last_Name,First_Name,Gender) VALUES ('$newSurname', '$newName', '$newGender')";

        if(mysqli_query($connect, $newPassenger)){
            echo "...";
        } else{
            echo "ERROR: Could not able to execute $newPassenger. " . mysqli_error($connect);
        }
    }



}