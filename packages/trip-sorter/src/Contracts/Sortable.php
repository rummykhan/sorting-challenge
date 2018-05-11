<?php
/**
 * Created by PhpStorm.
 * User: rummykhan
 * Date: 5/11/18
 * Time: 9:06 PM
 */

namespace RummyKhan\TripSorter\Contracts;


interface Sortable
{
    public function sort($array);
}