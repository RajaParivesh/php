<?php 
$inum1=10;
$inum2=5;
function add($number1,$number2){
	echo $number1 + $number2;
}
add($inum1,$inum2);

echo ' ';

function displayDate($day,$date,$year){
echo $day.''.$date.''.$year;
}

displayDate('Monday',31,2011);

 ?>
