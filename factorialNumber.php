<?php

$userInput = readLine("Please enter a single Number; ");

if(is_numeric($userInput)){
    echo factorialNumber($userInput);
}
else{
    echo "Please enter number Only";
}

function factorialNumber($getInput){
    $factorialNumber = 1;
    for($i=1;$i<=$getInput;$i++){
        $factorialNumber *= $i;
    }
    return $factorialNumber;
}
