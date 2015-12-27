<?php 

// $string = 'This is a string, and is an example.';
// $new_string = str_replace('is',' ',$string);

// second method

$find = array('is','string','example');
$replace = array('IS','STRING',' ');

$string = 'This is a string, and is an example.';

$new_string =str_replace($find, $replace, $string);

echo $new_string;

  ?>