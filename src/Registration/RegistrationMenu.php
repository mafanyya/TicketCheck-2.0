<?php

namespace Registration;

include "queries/InsertPassengerData.php";
include "queries/GetPassengerID.php";
include "queries/GetTicketID.php";
include "queries/InsertTicket.php";

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



        $newDiscount = new \Registration\RegDiscount();
        $newDiscount->isDiscount();
        $newDiscount->getDiscount();

        $insertpassenger = new InsertPassengerData($newName, $newSurname, $newGender);
        $insertpassenger->insertPassengerData($connect);


        $newPassengerID = new \Registration\GetPassengerID();
        $newPassengerID->setPassengerID($connect);
        $newPassengerID->getPassengerID();



        $newTicketID = new \Registration\GetTicketID();
        $newTicketID->setTicketID($connect);
        $newTicketID->getTicketID();


        $newHash = new \Registration\RegHash();
        $newHash->regHash($newTicketID);
        $newHash->getHash();



        $insertTicket = new InsertTicket($newDate, $newTrain, $newSeat, $newDiscount,
            $newPassengerID,$newHash, date("Y-m-d H:i:s"));

        $insertTicket->insertTicketData($connect);



        echo "
        $newSurname
        $newName
        $newGender
        $newTrain
        $newDate
        $newSeat
        $newDiscount
        $newTicketID
        $newHash
        ";


    }

}