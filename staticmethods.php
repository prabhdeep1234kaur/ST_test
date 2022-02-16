<?php 
class staticmethods{
	public static $greeting = 'hi!';

	public static function sayhello(){
		$var = "yo !";
	}
}

/*echo*/ staticmethods::$greeting;
/*echo*/ staticmethods::sayHello(); 

$hello = new staticmethods;
echo $hello->sayHello(); 

?>