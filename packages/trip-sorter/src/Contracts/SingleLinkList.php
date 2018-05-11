<?php
/**
 * Created by PhpStorm.
 * User: rummykhan
 * Date: 5/11/18
 * Time: 9:39 PM
 */

namespace RummyKhan\TripSorter\Contracts;


interface SingleLinkList
{
    public function getNext();

    public function setNext($next);
}