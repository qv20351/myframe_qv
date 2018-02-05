<?php
//Design Pattern : registry va singleon
class A
{
	private static $instance;
	private function __construct(){}
	private $storage;

	public static function getInstance()
	{
		if(!isset(self::$instance))
			self::$instance = new A;
		return self::$instance;
	}

	public function __set($name,$value){
		if(!isset($this->storage[$name]))
			$this->storage[$name] = $value;
	}

	public function __get($name){
		if(isset($this->storage[$name]))
			return $this->storage[$name];
		return null;
	}
}

$a = A::getInstance();
$a->name = 'supper';
echo $a->name;