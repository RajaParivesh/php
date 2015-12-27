<h3>but this is not seen/working in this example.</h3>
<?php 

$string1 = ' This is a example string. ';
$string2 = ' This is a example string. ';
$string3 = ' This is a example string. ';
$string_trimmed = trim($string1);
$string_left_trimmed = ltrim($string2);
$string_right_trimmed = rtrim($string3);

echo $string_trimmed.'<br>';
echo $string_left_trimmed.'<br>';
echo $string_right_trimmed;

 ?>