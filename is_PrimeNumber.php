<?php

function isPrimeNumber($userInput){
    $checkNumber;
    for($i = 2;$i < $userInput;$i++){
        if($userInput % $i == 0){
            $checkNumber = "It's not Prime Number";
            break;
        }
        else{
            $checkNumber = "It's a Prime Number";
        }
    }
    return $checkNumber;
};

echo isPrimeNumber(83);