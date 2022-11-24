<?php

namespace app\controllers;

use ishop\base\Controller;
use ishop\App;
use ishop\Cache;
use app\models\AppModel;
use app\widgets\currency\Currency;

class AppController extends Controller {
	public function __construct( $route ) {
		parent::__construct( $route );
		new AppModel();
		$currencies = Currency::getCurrencies();
		// debug( $currencies );
		App::$app->setProperty( 'currencies', $currencies );
		// debug( App::$app->getProperty( 'currencies' ) );
		App::$app->setProperty( 'currency', Currency::getCurrency( App::$app->getProperty( 'currencies' ) ) );
		// debug( App::$app->getProperty( 'currency' ) );
		App::$app->setProperty( 'cats', self::cacheCategory() );
		// debug( App::$app->getProperties() );
	}


	public static function cacheCategory() {
		$cache = Cache::instance();
		$categories = $cache->get( 'cats' );
		if ( !$categories ) {
			$categories = \R::getAssoc( "SELECT * FROM category" );
			$cache->set( 'cats', $categories );
		}
		return $categories;
	}
}