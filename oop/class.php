<?php
class Person{
	public $face;

	public function walk(){
		echo 'walk';
	}
}
class Student extends Person{
	public $name;
	public $age;
	public $gender;

	public function __construct($name,$face){
		$this->name = $name;
		$this->face = $face;
	}

	public function listen(){

	}

	public function read(){
		echo 'Student reading book';
	}

	public function say(){
		echo 'Hello my name is '.$this->name;
		echo '<br> mat toi la '.$this->face;
	}

	public function walk(){
		echo 'Ghi de walk';
	}
	function __destruct(){
		echo 'student is die';
	}
}

$student = new Student('Tai','mat tron');
$student->say();
echo '<br>';
$student->walk();
echo '<br>';
unset($student);