<?php 
$find = array('is','string','example');
$replace = array('IS','STRING','');

$string = 'this is a string,and is a example.';
$new_string = str_replace($find, $replace, $string);
echo $new_string;

?>