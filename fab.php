<?php 
#no built up summing up its precedding no, eg 2 = 1+1, 3 = 2+1, 

#0,1,1,2,3,5,8,13,21,etc
$number_f = 0;
$num1 = 0;
$num2 = 1;
echo $num1.', '.$num2;
while($number_f < 10){
	$num3 = $num1 + $num2;
	echo ', '.$num3;
	$num1 = $num2;
	$num2 = $num3;
	$number_f = $number_f + 1;
}


?>