<?php
/**
 * Created by PhpStorm.
 * User: rummykhan
 * Date: 5/11/18
 * Time: 9:12 PM
 */

namespace RummyKhan\TripSorter\Models;


final class TicketParser
{
    /**
     * @param $array
     * @return Ticket[]
     * @throws \Exception
     */
    public static function parse($array)
    {
        $tickets = [];
        foreach ($array as $item) {
            if (!isset($item['from'])) {
                throw new \Exception('Src of ticket is not set');
            }
            $from = $item['from'];

            if (!isset($item['to'])) {
                throw new \Exception('Destination of ticket is not set');
            }
            $to = $item['to'];

            if (!isset($item['transportation_type'])) {
                throw new \Exception('Transportation type of ticket is not set');
            }
            $transportation_type = $item['transportation_type'];

            if (!isset($item['transportation_number'])) {
                throw new \Exception('Transportation number type of ticket is not set');
            }
            $transportation_number = $item['transportation_number'];

            if (!isset($item['gate_number'])) {
                throw new \Exception('Seat number of ticket is not set');
            }
            $gate_number = $item['gate_number'];

            if (!isset($item['seat_number'])) {
                throw new \Exception('Seat number of ticket is not set');
            }
            $seat_number = $item['seat_number'];

            if (!isset($item['luggage_counter'])) {
                throw new \Exception('Luggage counter of ticket is not set');
            }
            $luggage_counter = $item['luggage_counter'];

            $ticket = new Ticket($from, $to, $transportation_type, $transportation_number, $gate_number, $seat_number, $luggage_counter);

            $tickets[$ticket->getTo()] = $ticket;
        }

        return $tickets;
    }
}