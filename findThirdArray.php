<?php

$keys = array(
    "field1"=>"first",
    "field2"=>"second",
    "field3"=>"third"
);
$values = array(
    "field1value"=>"dinosaur",
    "field2value"=>"pig",
    "field3value"=>"platypus"
);

$outputKey = [];
$outputValues = [];

foreach ($keys as $key => $value) {
    array_push($outputKey,$value);
}
foreach ($values as $key => $value) {
    array_push($outputValues,$value);
}
$finalOutput = array_combine($outputKey,$outputValues);
print_r($finalOutput);