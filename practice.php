<?php 
#feb series
/*$n1 = 0;
$n2 = 1;
$num  = 0; 
for ($i=0; $i <= 10; $i++) { 
		$n3 = $n1+$n2;
		echo $n3.'<br>';
		$n1 = $n2;
		$n2 = $n3;

		$num = $num+1;
	# code...
}*/

## second largest no
$numbers = array(5, 3, 7, 9, 6, 8);
$s = 0;
for ($i=0; $i < count($numbers); $i++) { 
	for ($j=0; $j < $i; $j++) { 
		if($numbers[$j] <= $numbers[$i]){
			$s = $numbers[$i];
		}
		# code...
	}
	# code...
}
echo $s; die;
?>