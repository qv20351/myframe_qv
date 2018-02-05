<?php
namespace app\controllers;
use app\core\Controller;

class HomeController extends Controller
{

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->render('index',[
			'name' => 'Supper',
			'age' => '100'
		]);
		//$this->redirect('http://google.com');
		//echo "Home Index";
	}
}