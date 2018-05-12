<?php

namespace RummyKhan\TripSorter;


use RummyKhan\TripSorter\Contracts\Sortable;
use RummyKhan\TripSorter\Models\Ticket;
use RummyKhan\TripSorter\Models\TicketParser;

class TripSorter implements Sortable
{
    /**
     * @param $array
     * @return array
     */
    public function sort($array)
    {
        $tickets = TicketParser::parse($array);

        $start = null;
        foreach ($tickets as $ticket) {

            if (!isset($tickets[$ticket->getFrom()])) {
                $start = $ticket;
                continue;
            }

            /** @var Ticket $matching_ticket */
            $matching_ticket = $tickets[$ticket->getFrom()];

            $matching_ticket->setNext($ticket);

            $tickets[$matching_ticket->getFrom()] = $matching_ticket;
        }

        $output = [];

        while ($start->getNext() !== null) {

            $output[] = (string)$start;

            $start = $start->getNext();
        }

        return $output;
    }
}