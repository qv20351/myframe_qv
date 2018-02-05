<?php
interface Person{
	public function say();

	public function walk();
}

interface Human{
	public function run();
}

class Student implements Person,Human{
	protected $name = 'tai';

	private $age = 20;

	public function say(){
		echo 'student say';
		echo '<br>'.$this->name;
	}

	public function walk(){

	}

	public function run(){

	}

	public function getName(){
		return $this->name;
	}
}

$student = new Student;
$student->say();
echo "<br>";
echo $student->getName();