<?php 
#1
$arr1 = array('1','2','3','abc0','dec');
$arr2 = array('des','ff','dd','11','25');

$merge = array_merge($arr1, $arr2);

$comb = array_combine($arr1, $arr2);

#2

$arr2  = array(1,2,'*','(','a',3,'b');
rsort($arr2);
//echo "<pre>";print_r($arr2);


#3 
$string1 = 'hello world!';
$array_string = str_split($string1);

foreach ($array_string as $key => $value) {
	if(!empty(trim($value))){

		echo "<pre>";print_r($value);
	}
}
?>