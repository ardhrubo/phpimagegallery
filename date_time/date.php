<?php


// date_default_timezone_set('Asia/Dhaka');

// echo date('d-m-y',mktime(12,0,0,1,16,2021));

$startDate = strtotime("2024-01-01");
$endDate = strtotime("2024-01-20");


// while($startDate< $endDate){
//     echo date("d-m-Y", $startDate). "\n";
//     $startDate = strtotime("+1 day", $startDate);
// }

$diff = $endDate - $startDate;

echo "Difference between two dates: " . floor(($diff)/(60*60*24)). " Days";

