<h1>Hint: Refresh again and again and see the text carefully.</h1>


<?php 

$string ='This is an example string.';
$string_shuffle=str_shuffle($string);

$half = substr($string_shuffle,0,strlen($string)/2);
$some_letter = substr($string_shuffle,0,5);

echo $string_shuffle;
echo '<br>';
echo $half;
echo '<br>';
echo $some_letter;


 ?>