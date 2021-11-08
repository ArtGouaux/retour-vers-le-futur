<?php

$presentTime = new DateTime;
$destinationTime = new DateTime;

$destinationTime->setDate(2009, 9, 13)->setTime(10, 32);

echo nl2br('Present time : ' . $presentTime->format('M d Y A h : i') . "\n");
echo nl2br('Destination time : ' . $destinationTime->format('M d Y A h : i') . "\n");

$interval = $presentTime->diff($destinationTime);
echo nl2br($interval->format('%Y years %M months %d days %h hours and %i minutes between these 2 dates') . "\n");