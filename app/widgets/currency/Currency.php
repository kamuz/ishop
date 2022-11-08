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
	public static function getCurrency() {

	}

	// Get HTML
	protected function getHtml() {

	}

}