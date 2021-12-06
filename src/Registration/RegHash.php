<?php

namespace Registration;

class RegHash
{
    protected  int $newTicketID;
    protected string $hash;


    function __construct()
    {


    }

    public function __toString(): string
    {
        // TODO: Implement __toString() method.
        return $this->hash;

    }


    public function regHash($newTicketID):void
    {
        $hash = sha1($newTicketID);
        $this->hash = $hash;


    }

    public function getHash():string
    {
        return $this->hash;
    }

}