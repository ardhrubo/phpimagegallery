<?php

require_once 'vendor/autoload.php';

use Carbon\Carbon;

date_default_timezone_set('Asia/Dhaka');

$c = Carbon::now();


//echo $c ->timezoneName;

//echo $c -> dayOfWeek;
//
//$c->year = 2021;
//$c->month = 4;
//echo $c->toDateString();

// eq neq gt lt gte lte


$startDate = Carbon::today();
$endDate = Carbon::now()->addYears(2);

echo 'My age is '.$startDate->diffInMinutes($endDate).' year <br> ';

$Ad = Carbon::parse('-1 year');

echo $Ad;











