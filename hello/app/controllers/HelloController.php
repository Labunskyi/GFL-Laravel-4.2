<?php

class HelloController extends BaseController
{
	public function showHello() {
	
	$name = Input::old('name');
		
	$list = array('About'=>'/about', 'Contact'=>'/contact', 'Tos'=>'/tos');
	return View::make('hello2', array('name' => $name, 'urls' => $list));
	}

	public function showForm() {

	return View::make('form');
	}


	public function postSubmit() {
	
	
		if(Input::has('name')){
	
				//$name = Input::get('name');
			return Redirect::action('HelloController@showHello')->withInput();	
		}
		return Redirect::route('myForm');
	}

	public function dbTest($id) {
	
	//$user = DB::table('users')-> where('id', $id)->select('email')->get();
	
	// if(DB::table('users')->where ('name', 'test5')->count()){
	// $user = DB::table('users')->where('name', 'test3')->delete();
	//var_dump ($user);
	//}
	//else {
	//return "User exists";
	//}
	//}
	
	$artist = Artist::find($id);
	var_dump($artist->tracks);


	$albums = $artist->albums;
	foreach ($albums as $album){
	
	echo $album->Title . ' (' . $album->artist->Name . ')';
	echo '</br>';
	$tracks = $album->tracks;
	foreach ($tracks as $track){
 
         echo '-' . $track->Name . ' (' . $track->album->Title . ')';
         echo '</br>';	
	}
	}
	var_dump($track);

	//return View::make('songlist', compact('tracks'));
}
}
