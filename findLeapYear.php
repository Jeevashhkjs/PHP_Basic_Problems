<?php

$userInput = readLine("Please enter a year ");

function findLeapYear($getUserInput){
    if($getUserInput % 400 == 0 || $getUserInput % 4 == 0 || $getUserInput % 100 == 0){
        echo "It's a Leap Year";
    }
    else{
        echo "It's not a Leap Year";
    }
}

findLeapYear($userInput);