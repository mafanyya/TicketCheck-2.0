<?php

namespace Registration;

class GetTicketID
{

    public int $ticketID;

    public function __construct()
    {
    }

    public function __toString():string
    {
        // TODO: Implement __toString() method.
        return $this->ticketID;
    }

    public function setTicketID($connect):void
    {
        $selectId= "SELECT MAX(Ticket_id) FROM booking";
        $ticketID = mysqli_query($connect,$selectId);

        $row = mysqli_fetch_assoc($ticketID);

        $ticketID = 1 + $row['MAX(Ticket_id)'];
        $this->ticketID = $ticketID;


    }
    public function getTicketID():int
    {
        return $this->ticketID;
    }

}