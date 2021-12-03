<?php
namespace Registration;
use Registration\InsertPassengerData;


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



//        //insert passenger data
//        $insertpassenger = new InsertPassengerData();
//        $insertpassenger->insertPassengerData($connect);


        $newDate = new \Registration\RegDate();
        $newDate->regDate();
        $newDate->getDate();


        $newTrain = new \Registration\RegTrain();
        $newTrain -> regTrain();
        $newTrain -> getTrain();


        $newSeat = new \Registration\RegSeat();
        $newSeat -> regSeat();
        $newSeat ->getSeat();
        global $newSeat;


        $newDiscount = new \Registration\RegDiscount();
        $newDiscount ->isDiscount();
        $newDiscount ->getDiscount();

        echo "
        $newSurname,
        $newName,
        $newGender,
        $newTrain,
        $newDate,
        $newSeat,
        $newDiscount";



    }

}