<?php 

class automobile{
	public $fuel; 
	protected $engine;
	private $transmission;
}

class car extends automobile{
	
	public function __construct(){
		echo 'The class "' . __CLASS__ . '" was initiated!<br>';
	}
}

$automobile = new automobile;
$automobile->fuel = 'petrol';
$automobile->engine = '500cc';// fatal error
//$automobile->transmission = 'manual'; // undefined

$car = new car;
$car->fuel = 'Diesel';
$car->engine = '2200 cc'; // fatal error
//$car->transmission = 'Automatic'; // undefined


?>