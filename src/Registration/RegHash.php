<?php

namespace Registration;

class RegHash
{
    protected string $hash;

    public function __toString(): string
    {
        return $this->hash;

    }

    public function regHash($newTicketID): void
    {
        $hash = sha1($newTicketID);
        $this->hash = $hash;

    }

    public function getHash(): string
    {
        return $this->hash;
    }

}