<?php

$input = [1,2,4];

function arrayCheck($getInput){
    if($getInput){
        return "It's an array";
    }
    else{
        return "It's empty array";
    }
}

echo arrayCheck($input);

