<?php

class Person {
	var $first_name;
	var $last_name;
	function say_hello() {
		echo "Hello there! ".get_class($this)."<br />";
	}
	function full_name() {
		return $this->$first_name." ".$this->$last_name;
	}

}

$person = new Person();
$person->$first_name = 'Lupe'; 
$person->$last_name = 'Ruiz'; 

echo $person -> full_name();

?>