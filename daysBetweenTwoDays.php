<?php

$date1 = readLine("Please enter your Birth Date(12-08-2021)");
$date2 = date("Y-m-d");

function diffDate($getDate1,$getDate2){
    $difTwoDates = strtotime($getDate2) - strtotime($getDate1);

     return abs(round($difTwoDates/86400))." Days";
}
echo diffDate($date1,$date2);