<?php

class ArticlesController extends BaseController {

	public function index() {
	
	$home = array('home' => '/~user1/task1/home');
	$dir_name = dirname($_SERVER['PHP_SELF']);
		
	$titles = array();
	for ($i = 1; $i <= 10; $i++) {
    	array_push($titles, 'Article' . $i);
	}
	
	$urls = array();
	for ($i = 1; $i <= 10; $i++) {
	array_push($urls, $dir_name . '/article/' . $i);
	}		
	
	$articles = array_combine($urls, $titles);

	return View::make('articles', compact('articles', 'home'));	
	
	}

}
