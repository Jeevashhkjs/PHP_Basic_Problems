<?php

// get input from user
$userInput = readLine("Please enter a Number : ");

// check user input is integer or not 
if(is_numeric($userInput)){
    fibonacci($userInput);
}
else{
    echo "Please enter number Only";
}

// function
function fibonacci($getNumber){

    $count = 0;
    $number1 = 0;
    $number2 = 1;

    for($i=0;$i<$getNumber;$i++){
        $output = $number1 + $number2;
        $number1 = $number2;
        $number2 = $output;

        echo $output;
        echo "\n";
    }
}


