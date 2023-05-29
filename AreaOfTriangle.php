<?php

$height = readLine("Please enter the Height :");
$base = readline("Please enter the Base :");

if(is_numeric($height) && is_numeric($base)){
    echo areaOfTriangle($height,$base);
}
else{
    echo "Please enter a Number";
}

function areaOfTriangle($getHeight,$getBase){
    return (1/2) * $getBase * $getHeight;
}
