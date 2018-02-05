<?php
require_once(dirname(__FILE__).'/Autoload.php');
use app\core\Registry;

class App
{
	private $router;

	private static $controller;
	private static $action;

	function __construct($config)
	{
		new Autoload($config['rootDir']);

		$this->router = new Router($config['basePath']);
		
		Registry::getInstance()->config = $config;
	}

	

	// public static function setController($controller)
	// {
	// 	self::$controller = $controller;
	// }

	// public static function getController()
	// {
	// 	return self::$controller;
	// }

	// public static function setAction($action)
	// {
	// 	self::$action = $action;
	// }

	// public static function getAction()
	// {
	// 	return self::$action;
	// }

	public function run()
	{
		$this->router->run();
	}
}