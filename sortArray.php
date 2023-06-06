<?php

$array = [1,20,2,30,-1,0,-5];

// ascending order
sort($array);
foreach ($array as $key => $value) {
   echo $value."\n";
}

// descending order
rsort($array);
foreach ($array as $key => $value) {
   echo $value;
}
