<?php
/**
 * Created by PhpStorm.
 * User: rummykhan
 * Date: 5/11/18
 * Time: 8:55 PM
 */

namespace RummyKhan\TripSorter\Contracts;


interface TicketAble
{
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
    public function __construct(
        $from, $to, $transportation_type, $transportation_number, $gate_number, $seat_number, $luggage_counter
    );

    /**
     * @return string
     */
    public function getFrom();

    /**
     * @return string
     */
    public function getTo();

    /**
     * @return string
     */
    public function getTransportationType();

    /**
     * @return string
     */
    public function getTransportationNumber();

    /**
     * @return string
     */
    public function getSeatNumber();

    /**
     * @return string
     */
    public function getLuggageCounter();

    /**
     * @return string
     */
    public function getGateNumber();
}