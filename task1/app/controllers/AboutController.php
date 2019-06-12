<?php

class AboutController extends BaseController {

	public function index() {
	
	$home = array('home' => '/~user1/task1/home');
		
	return View::make('about', compact('home'));	
	
	}

}
