<?php

namespace app\widgets\currency;

class Currency {

	protected $tpl;
	protected $currencies;
	protected $currency;

	// Set template and run widget
	public function __construct() {
		$this->tpl = __DIR__ . '/currency_tpl/currency.php';
		$this->run();
	}

	// Run
	protected function run(){
		$this->getHtml();
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

	}

}