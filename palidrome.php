<?php

//get user input
$userInput = readLine("Please enter a single word ");

//palidrome function
function palidromeOrNot($getInput){

    //store reverse string value
    $reverseString = "";
    for($i=strlen($getInput)-1;$i>=0;$i--){
        $reverseString .= $getInput[$i];
    }

    //check reverse string and userinput is equal or not 
    if($reverseString == $getInput){
        echo "It's a Palidrome";
    }
    else{
        echo "It's not a Palidrome";
    }
}

palidromeOrNot($userInput);

