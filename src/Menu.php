<?php

namespace App;

use Checking\CheckingMenu;
use Registration\RegistrationMenu;


class Menu
{
    protected string $TD;

    public function welcome($connect):void
    {
        echo 'Welcome to the TicketCheck program! How we can help you??' . PHP_EOL;
        $this->toStartMenu($connect);

    }

    public function toStartMenu($connect):void
    {
        echo '1) Ticket registration;
2) Checking the ticket;
(enter value (1,2)' . PHP_EOL;

        $TD = fgets(STDIN);
        $this->TD = $TD;

        switch ($this->TD) {
            case 1:
                $reg = new RegistrationMenu();
                $reg->registrationMenu($connect);
                break;

            case 2:
                $check = new CheckingMenu();
                $check->checkingMenu($connect);
                break;
            default:
                echo "Error, please enter the correct value " . PHP_EOL;
                $this->toStartMenu($connect);
                break;
        }
    }

}