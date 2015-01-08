<?php
//------------------------------------LECTURE 3---------------------
//ex.1
	$banjo = "boolean";
	$animals = array("swordfish", "parakeet", "pistol shrimp");
	$kazoo;

	if(is_bool($banjo)){
		echo "it is a boolean";
	}
	else{
		echo "not a boolean"; //'else' will be run because $banjo is not a true or false value
	}

	echo "<br>";

	if(is_array($animals)){
		echo "animals is an array"; //'if' will run because $animals is an array (a variable with multiple values)
	}
	else{
		echo "animals is not an array";
	}

	echo "<br>";

	class Ear{

	}
	$elvish = new Ear;

	if(is_object($elvish)){
		echo "is an object"; //because $elvish is an isntance of a class it is a variable
	}
	else{
		echo "not an object";
	}

