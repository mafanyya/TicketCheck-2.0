<?php

namespace Registration;

include "queries/InsertPassengerData.php";
include "queries/GetPassengerID.php";
include "queries/GetTicketID.php";
include "queries/InsertTicket.php";
include "queries/GetPrice.php";
include "queries/GetArrivalTime.php";
include "queries/GetDepartureTime.php";
include "queries/GetDiscount.php";


class RegistrationMenu
{
    public function registrationMenu($connect): void
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
            $newPassengerID, $newHash, date("Y-m-d H:i:s"));

        $insertTicket->insertTicketData($connect);

        $price = new GetPrice($newTrain, $newDiscount);
        $price->getPriceDB($connect);
        $price->getPrice();

        $arrivalTime = new GetArrivalTime($newTrain);
        $arrivalTime->setArrivalTime($connect);
        $arrivalTime->getArrivalTime();

        $departureTime = new GetDepartureTime($newTrain);
        $departureTime->setDepartureTime($connect);
        $departureTime->getDepartureTime();

        $discount = new GetDiscount($newDiscount);
        $discount->setDiscount($connect);
        $discount->getDiscount();


        echo "Registration successfully completed" . PHP_EOL;

        echo "$newSurname $newName" . PHP_EOL;
        echo "Train nr.: $newTrain" . PHP_EOL;
        echo "Seat.: $newSeat" . PHP_EOL;

        echo "Date: $newDate" . PHP_EOL;
        echo "Departure time: $departureTime" . PHP_EOL;
        echo "Arrival time: $arrivalTime" . PHP_EOL;
        echo "Price: $price (your discount is $discount)" . PHP_EOL;

        echo "Your ticket-hash is $newHash" . PHP_EOL;
        echo "PLEASE REMEMBER IT!" . PHP_EOL;

    }

}