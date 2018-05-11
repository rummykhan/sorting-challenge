<?php

require '../vendor/autoload.php';

$json = file_get_contents(__DIR__ . '/assets/tickets.json');

$tickets = json_decode($json, true);

$trip_sorter = new \Aamir\TripSorter\TripSorter();

$sorted_tickets = $trip_sorter->sort($tickets);

echo '<pre>';
print_r($sorted_tickets);