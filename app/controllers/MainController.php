<?php

namespace app\controllers;

use ishop\App;

class MainController extends AppController {

	public function indexAction(){
		$this->setMeta( App::$app->getProperty('shop_name') . ' - Home page', 'This is test description' );
		$messages = \R::findAll( 'messages' );
		$this->set( [ 'messages' => $messages ] );
	}

	public function viewAction(){

	}
}