<?php

namespace app\controllers;

use ishop\base\Controller;
use ishop\App;
use app\models\AppModel;
use app\widgets\currency\Currency;

class AppController extends Controller {
	public function __construct( $route ) {
		parent::__construct( $route );
		new AppModel();
		$currencies = Currency::getCurrencies();
		// debug( $currencies );
		App::$app->setProperty( 'currency', $currencies );
		// debug( App::$app->getProperty( 'currency' ) );
	}
}