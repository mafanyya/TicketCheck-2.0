<?php

namespace Checking;

include "queries/CheckHash.php";

class CheckingMenu
{
    public function checkingMenu($connect)
    {
        echo "TICKET CHECKING" . PHP_EOL;
        echo "Enter your hash:".PHP_EOL;
        $hash = fgets(STDIN);

        $isCorrect = new CheckHash($hash);
        $isCorrect->isCorrect($connect);
        $isCorrect->getIsCorrect();

//        var_dump($isCorrect);

        function correct()
        {
            echo "Your hash is correct!";
        }

        function incorrect()
        {
            echo "Your hash is incorrect";
        }

        switch ($isCorrect){
            case "1":
                correct();
                break;
            case "0":
                incorrect();
                break;
        }


    }


}