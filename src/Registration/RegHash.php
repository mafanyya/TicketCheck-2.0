<?php

namespace Registration;

class RegHash
{
    protected $newPassengerID;
    protected string $hash;


//    function __construct($newPassengerID)
//    {
//        $this->newPassengerID =$newPassengerID;
//    }
    public function __toString()
    {
        // TODO: Implement __toString() method.
        return $this->hash;
    }

    public function regHash($newPassengerID):void
    {

        $hash = sha1($this->newPassengerID);
        $this->hash = $hash;

    }

    public function getHash():string
    {
        return $this->hash;
    }

}