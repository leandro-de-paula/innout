<?php
// Controler Temporario!!!

$i1 = DateInterval::createFromDateString('9 hours');
$i2 = DateInterval::createFromDateString('6 hours');

$r1 = sumIntervals($i1, $i2); 

echo "<pre>";
print_r($r1);
echo "</pre>";