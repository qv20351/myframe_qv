<?php 
class Person{
	public $face;

	public function walk(){
		echo 'walk';
	}
}

abstract class Student extends Person{
	public $name = 'tai';
	protected $age = 20;

	abstract public function say();
}

class studentA extends Student{
	public function __construct(){
		$this->face = 'mat tron';
	}

	public function say(){
		echo 'hello';
		echo $this->age;
	}
}


$student = new StudentA; //Ghi chu : khong the goi duoc Abstract Class , chi goi con cua no moi su dung duoc Ham trong no
$studentA->say();
echo "<br>";
echo $studentA->face;

