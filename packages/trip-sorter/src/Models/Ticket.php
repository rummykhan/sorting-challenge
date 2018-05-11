<?php
/**
 * Created by PhpStorm.
 * User: rummykhan
 * Date: 5/11/18
 * Time: 9:00 PM
 */

namespace RummyKhan\TripSorter\Models;


use RummyKhan\TripSorter\Contracts\SingleLinkList;
use RummyKhan\TripSorter\Contracts\TicketAble;

class Ticket implements TicketAble, SingleLinkList
{
    private $from;
    private $to;
    private $transportation_type;
    private $transportation_number;
    private $gate_number;
    private $seat_number;
    private $luggage_counter;

    /** @var Ticket */
    private $next;

    /**
     * Ticket constructor.
     *
     * @param $from
     * @param $to
     * @param $transportation_type
     * @param $transportation_number
     * @param $gate_number
     * @param $seat_number
     * @param $luggage_counter
     */
    public function __construct($from, $to, $transportation_type, $transportation_number, $gate_number, $seat_number, $luggage_counter)
    {
        $this->from = $from;
        $this->to = $to;
        $this->transportation_type = $transportation_type;
        $this->transportation_number = $transportation_number;
        $this->gate_number = $gate_number;
        $this->seat_number = $seat_number;
        $this->luggage_counter = $luggage_counter;
    }

    /**
     * @return string
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * @return string
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * @return string
     */
    public function getTransportationType()
    {
        return $this->transportation_type;
    }

    /**
     * @return string
     */
    public function getTransportationNumber()
    {
        return $this->transportation_number;
    }

    /**
     * @return string
     */
    public function getSeatNumber()
    {
        return $this->seat_number;
    }

    /**
     * @return string
     */
    public function getLuggageCounter()
    {
        return $this->luggage_counter;
    }

    public function getGateNumber()
    {
        return $this->gate_number;
    }

    public function getNext()
    {
        return $this->next;
    }

    public function setNext($next)
    {
        $this->next = $next;
    }

    public function __toString()
    {
        $string = 'Take ' . $this->getTransportationType() . ' ' . $this->getTransportationNumber() . ' ' .
            ' From ' . $this->getFrom() . ' To ' . $this->getTo() . '.';

        if (!empty($this->getGateNumber())) {
            $string .= ' Gate ' . $this->getGateNumber() . ',';
        }

        $string .= ' Seat ' . $this->getSeatNumber() . '.';

        if (!empty($this->getLuggageCounter())) {
            $string .= ' ( Baggage drop at luggage counter ' . $this->getLuggageCounter() . ' ).';
        }

        return $string;
    }
}