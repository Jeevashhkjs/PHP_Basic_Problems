<?php

function isPrimeNumber($userInput){
    $checkNumber = "";
    if($userInput === 1){
        echo "1 is a Prime Number";
    }else{
        for($i = 2;$i < $userInput;$i++){
            if($userInput % $i == 0){
                $checkNumber = $userInput." It's not Prime Number";
                break;
            }
            else{
                $checkNumber = $userInput." It's a Prime Number";
            }
        }
    }

    return $checkNumber;
};

$a = readline('Enter a Number: ');

echo isPrimeNumber($a);