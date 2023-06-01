<?php

$userInput1 = readLine("Please enter a Number ");
$userInput2 = readLine("Please enter a another Number ");

swapNumbers($userInput1,$userInput2);

function swapNumbers($getInput1,$getInput2){
    $getInput1 = (int)$getInput1;
    $getInput2 = (int)$getInput2;
    if(is_numeric((int)$getInput1) && is_numeric((int)$getInput2)){
        $getInput1 = $getInput1 + $getInput2;
        $getInput2 = $getInput1 - $getInput2;
        $getInput1 = $getInput1 - $getInput2;

        echo "Number 1 = ".$getInput1." Number 2 = ".$getInput2;
    }
    else{
        echo "Please enter a number only";
    }

}

