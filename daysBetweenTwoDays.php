<?php

$date1 = "23-10-2002";
$date2 = "20-05-2023";

function diffDate($getDate1,$getDate2){
    $difTwoDates = strtotime($getDate2) - strtotime($getDate1);

     return abs(round($difTwoDates/86400))." Days";
}
echo diffDate($date1,$date2);