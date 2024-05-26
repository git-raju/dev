<?php

$array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');

echo $key = array_search('green', $array); // $key = 2;
echo ' ZZZZ-'.$key = array_search('red1', $array);   // $key = 1;