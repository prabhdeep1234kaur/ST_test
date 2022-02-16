<?php 

#print odd no, 

for ($i=1; $i <= 25 ; $i++) {

	# code...
	if($i%2 == 0){
		echo $i."EVEN <br>";
	}elseif($i%2 != 0){
		echo $i."<i>odd</i><br>";
	}
}
?>