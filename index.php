<?php
require 'ftw_framework.php';

$routes = array(
	''				=>		'index',
	'foo'			=>		'foo',
	'foo/bar'		=>		'foobar',
);

class index {
	function GET()
	{
		echo 'We are in the index class GET';
	}
}

class foo {

	function GET($name)
	{
		$data = array(
			'name'		=>	$name
		);

		FTW::doRender('templates', 'foo', $data);
		
		echo 'Hello, '.$name;
	}
	
	function wrong_num_params($params)
	{
		echo 'wrong_num_params!';
		print_r($params);
	}
}

class foobar {
	function GET()
	{
		echo 'We are in the foobar class GET';
	}
}

FTW::doRun($routes, TRUE);