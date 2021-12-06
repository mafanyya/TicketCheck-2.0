<?php

namespace Registration;

class GetPrice
{
    public function __construct($newTrain, $newDiscount)
    {
        $this->newTrain = $newTrain;
        $this->newDiscount = $newDiscount;
    }

    public function __toString(): string
    {
        return $this->price;
    }

    public function getPriceDB($connect): void
    {
        $q = "SELECT Price FROM trains where Train_Nr = '$this->newTrain'";
        $price = mysqli_query($connect, $q);

        $row = mysqli_fetch_assoc($price);

        $price = $row['Price'];
        $this->price = $price;

        $this->getDiscount();

    }

    public function getDiscount(): void
    {
        switch ($this->newDiscount) {
            case 1 || 2 :
                $this->price = $this->price * 0.49;
                break;
            case 3:
                $this->price = $this->price * 0.8;
                break;
            case 4:
                $this->price = $this->price * 0.1;
                break;
            default:
                $this->price = $this->price * 1;

        }

    }

    public function getPrice(): int
    {
        return $this->price;
    }

}