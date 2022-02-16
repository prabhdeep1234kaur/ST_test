<?php 
#no having 1 as its multiplying factors

for($i=1;$i<=100;$i++){  //numbers to be checked as prime
  $counter = 0; 
  for($j=1;$j<=$i;$j++){ //all divisible factors
    if($i % $j==0){ 
      $counter++;
    }
  }

  //prime requires 2 rules ( divisible by 1 and divisible by itself)
  if($counter==2){
    print $i."<br/>";
  }
}


?>