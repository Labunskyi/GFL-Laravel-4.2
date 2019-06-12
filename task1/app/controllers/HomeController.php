<?php

class HomeController extends BaseController {

	public function showHello() {

	return Redirect::action('HomeController@showHome');
	
	}

	public function showHome()
	{	

  	$dir_name = dirname($_SERVER['PHP_SELF']);
	
        $list = array('Articles'=>  $dir_name . '/articles', 'About'=> $dir_name . '/about', 'Contact us'=>  $dir_name . '/contact-us');
	
	
	return View::make('home', array('urls' => $list));
	
	}

}
