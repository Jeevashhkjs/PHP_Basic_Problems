<?php

$number = readLine("Please enter Number" );

function splitNumbers($getInput){
  $strng = strval($getInput);
  $spltStrng = str_split($strng);
  for($i=count($spltStrng)-1;$i>=0;$i--){
    echo $spltStrng[$i];
  }
}

splitNumbers($number);