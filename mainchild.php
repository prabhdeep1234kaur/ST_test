<?php 
include_once('mainparent.php');

class mainchild extends mainparent{
	public function isSquare(){

		if($this->lengthh == $this->widthh){
			return true; // Square
		}else{
			return false; // not sq
		}
	}
}

//object

$obj = new mainchild;

// Set object properties values
$obj->lengthh = 20;
$obj->widthh = 20;

// Call the object methods
if($obj->isSquare()){
    echo "The area of the square is ";
} else{
    echo "The area of the rectangle is ";
};
echo $obj->getArea();

?>