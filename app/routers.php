<?php
use app\core\Controller;
use app\core\QueryBuilder;
use app\core\Pdox;

Router::get('/home','HomeController@index');

Router::get('/',function(){
	$builder = QueryBuilder::table('users')->select('cot1','cot2')->distinct()
	->orderBy('cot1','ASC')
	->orderBy('cot2','DESC')
	->limit(10)
	->offset(5)
	->get();
	echo $builder;
	//var_dump($builder);
	// $ct = new Controller;
	// $ct->render('index',['age'=>400,'name'=>'Hero']);
});

Router::get('/user',function(){
	$config1 = [
    'host'      => 'localhost',
    'driver'    => 'mysql',
    'database'  => 'test',
    'username'  => 'root',
    'password'  => '',
    'charset'   => 'utf8',
    'collation' => 'utf8_general_ci',
    'prefix'     => ''
	];

	$db = new Pdox($config1);

	$data1 = [
	'name' => 'Burak',
	'surname' => 'Demirtaş',
	'age' => '24',
	'country' => 'Turkey',
	'city' => 'Ankara',
	'status' => 1
	];

	$query = $db->table('users')->insert($data1);

	if($query)
	{
		echo 'Record added! <br />' . 
			 'InsertID: ' . $db->insertId();
	}

});

Router::get('/news/{category}/{id}',function(){
	echo "news page";
});

Router::get('/test',function(){
		$ct = new Controller;
		$ct->render('test');
	});

Router::any('*',function(){
	echo "404 Page Not Found";
});
?>