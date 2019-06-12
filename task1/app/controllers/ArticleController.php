<?php

class ArticleController extends BaseController {

	public function index($id) {
	
	return View::make('article', compact('id'));	
	
	}

}
