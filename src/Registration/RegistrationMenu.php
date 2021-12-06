<?php

namespace Registration;

include "queries/InsertPassengerData.php";
include "queries/GetPassengerID.php";

class RegistrationMenu
{
    public function registrationMenu($connect)
    {
        echo ("---TICKET REGISTRATION---") . PHP_EOL;

        $newSurname = new \Registration\RegSurname();
        $newSurname->regSurname();
        $newSurname->getSurname();


        $newName = new \Registration\RegName();
        $newName->regName();
        $newName->getName();

        $newGender = new \Registration\RegGender();
        $newGender->regGender();
        $newGender->getGender();


        $newDate = new \Registration\RegDate();
        $newDate->regDate();
        $newDate->getDate();


        $newTrain = new \Registration\RegTrain();
        $newTrain->regTrain();
        $newTrain->getTrain();


        $newSeat = new \Registration\RegSeat();
        $newSeat->regSeat();
        $newSeat->getSeat();
        global $newSeat;


        $newDiscount = new \Registration\RegDiscount();
        $newDiscount->isDiscount();
        $newDiscount->getDiscount();

        $newPassengerID = new \Registration\GetPassengerID();
        $newPassengerID->setPassengerID($connect);
        $newPassengerID->getPassengerID();


        $newHash = new RegHash();
        $newHash->regHash($newPassengerID);
        $newHash->getHash();

        $insertpassenger = new InsertPassengerData($newName, $newSurname, $newGender);
        $insertpassenger->insertPassengerData($connect);




        echo "
        $newSurname,
        $newName,
        $newGender,
        $newTrain,
        $newDate,
        $newSeat,
        $newDiscount
        $newHash";


    }

}