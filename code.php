<?php
/*
* Einstein was here
*/
class NameSplitter{
	public $fullname;
	public $firstName;
	public $name;
	public $surname;
	public function __construct($var){
		$rawName = explode(" ",$var);
		$this->fullname = $var;
		$this->surname = end($rawName);
		$this->firstName = reset($rawName);
		$this->name = trim(str_replace($this->surname, '', $var));
	}
	public function getFullname(){
		return $this->fullname;
	}
	function getFirstname(){
		return $this->firstName;
	}
	function getLastname(){
		return $this->lastName;
	}
	public function getSurname(){
		return $this->surname;
	}
	function getNames(){
		return explode(" ",$this->name);
	}
	function getName(){
		return $this->name;
	}
}
