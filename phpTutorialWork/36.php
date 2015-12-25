<h1>See the text carefully.</h1>


<?php 

$string ='This is an example string.';
$string_reversed=strrev($string);

echo $string_reversed;

// Now how to compare two string.
$string_one = 'This is my essay. I\'m going to be talking about php.';
$string_two = 'This is my essay. I will be talking about the subject php.';

similar_text($string_one, $string_two,$result);
echo '<br><br><br>';
echo 'The similarity between is, '.$result;


 ?>