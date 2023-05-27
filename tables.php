<?php

$userInputTable = readLine("Please enter what table you want ");
$userInputCount = readLine("Please enter count ");

if(is_numeric($userInputCount) && is_numeric($userInputTable)){
    if($userInputCount > 0 && $userInputTable > 0){
        tables($userInputTable,$userInputCount);
    }
    else{
        echo "Please enter value greater than 1 ";
    }
}
else{
   echo "Please enter a Number";
}

function tables($tables,$count){
  for($i=1;$i<=$count;$i++){
    echo $i." * ".$tables." = ".$i * $tables."\n";
  }
}
