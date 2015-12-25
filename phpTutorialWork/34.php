<?php 

$string = 'This is an example string.';
$string_word_count = str_word_count($string);
$string_word_number_count = str_word_count($string,1);
$string_word_position_count = str_word_count($string,2);

print_r ($string_word_count);
echo ' <br>';
print_r ($string_word_number_count);
echo '<br> ';
print_r ($string_word_position_count);
 ?>