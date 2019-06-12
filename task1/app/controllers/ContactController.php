<?php

class ContactController extends BaseController {

	public function index() {
	
	$home = array('home' => '/~user1/task1/home');
	
	$name = Input::old('name');
	$message = Input::old('message');
	
	if ($name === '' && $message) {
		$error = 'Error name';
	} elseif ($name && $message === '') $error = 'Error message';
	elseif($name === '' && $message === '') $error = 'Error name and message';
	else $error = '';
	
	return View::make('contact-us', compact('home', 'error'));	
	}

	
	public function showThanks() {
	
	$name = Input::old('name');
	return View::make('thank-you', compact('name'));
		
	}

	public function postSubmit() {
  
                  if(Input::has('name') && Input::has('message')){
                
                  return Redirect::action('ContactController@showThanks')->withInput();
                  }
			
                 return Redirect::action('ContactController@index')->withInput();
          }

}
