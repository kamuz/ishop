<?php

namespace app\controllers;

use ishop\App;

class MainController extends AppController {

	public function indexAction(){
		$this->setMeta( App::$app->getProperty('shop_name') . ' - Home page', 'This is test description' );
		$brands = \R::find( 'brand', 'LIMIT 3' );
		$this->set( compact( 'brands' ) );
	}
}