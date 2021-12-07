<?php

namespace Registration;

class GetDiscount
{
    public function __construct($newDiscount)
    {
        $this->newDiscount = $newDiscount;
    }

    public function __toString(): string
    {
        return $this->discount;
    }

    public function setDiscount($connect): void
    {
        $q = "SELECT Discount FROM discounts where Discount_ID = '$this->newDiscount'";
        $discount = mysqli_query($connect, $q);

        $row = mysqli_fetch_assoc($discount);

        $discount = $row['Discount'];
        $this->discount = $discount;

    }

    public function getDiscount(): string
    {
        return $this->discount;
    }

}