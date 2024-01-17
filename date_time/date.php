<?php


// date_default_timezone_set('Asia/Dhaka');

// echo date('d-m-y',mktime(12,0,0,1,16,2021));

$startDate = strtotime('Friday');
$endDate = strtotime('+1 week');


while($startDate< $endDate){
    echo date("d-m-Y", $startDate). "\n";
    $startDate = strtotime("+1 day", $startDate);
}



