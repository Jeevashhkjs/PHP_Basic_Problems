<?php

$referenceTable = array();
$referenceTable['val1'] = array(1, 2);
$referenceTable['val2'] = 3;
$referenceTable['val3'] = array(4, 5);

$testArray = array();

$testArray = array_merge($testArray, $referenceTable['val1']);
// referenceTable['val2'] is not an array data type, if you want to concatenate another variable, that variable must be of the same data type. So, I have changed the data type of number to array. It's works properly
$testArray = array_merge($testArray, array($referenceTable['val2']));
$testArray = array_merge($testArray, $referenceTable['val3']);

print_r($testArray);