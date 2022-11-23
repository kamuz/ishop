<?php

namespace app\widgets\currency;

use ishop\App;

class Currency {

	protected $tpl;
	protected $currencies;
	protected $currency;

	// Set template and run widget
	public function __construct() {
		$this->tpl = __DIR__ . '/tpl/currency.php';
		$this->run();
	}

	// Run
	protected function run(){
		$this->currencies = App::$app->getProperty('currencies');
		$this->currency = App::$app->getProperty('currency');
		echo $this->getHtml();
	}

	// Get currencies as accoc array
	public static function getCurrencies() {
		return \R::getAssoc( "SELECT code, title, symbol_left, symbol_right, value, base FROM currency ORDER BY base DESC" );
	}

	// Get current currency
	public static function getCurrency( $currencies ) {
		if ( isset( $_COOKIE['currency'] ) && array_key_exists( $_COOKIE['currency'] , $currencies ) ) {
			$key = $_COOKIE['currency'];
		} else {
			$key = key( $currencies );
		}
		$currency = $currencies[$key];
		$currency['code'] = $key;
		return $currency;
	}

	// Get HTML
	protected function getHtml() {
		ob_start();
		require_once $this->tpl;
		return ob_get_clean();
	}

}