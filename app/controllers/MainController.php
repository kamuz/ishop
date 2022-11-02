<?php

namespace app\controllers;

use ishop\App;

class MainController extends AppController {

	public function indexAction(){
		$this->setMeta( App::$app->getProperty('shop_name') . ' - Home page', 'This is test description' );
		$brands = \R::find( 'brand', 'LIMIT 3' );
		$hits = \R::find( 'product', "hit = '1' AND status = '1' LIMIT 8" );
		$this->set( compact( 'brands', 'hits' ) );
	}
}