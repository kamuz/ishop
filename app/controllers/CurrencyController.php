<?php

namespace app\controllers;

class CurrencyController extends AppController {
	/**
	 * Call if change currency value
	 */
	public function changeAction() {
		$currency = !empty( $_GET['curr'] ) ? $_GET['curr'] : null;
		if ( $currency ) {
			$curr = \R::findOne( 'currency', 'code = ?', [$currency] );
			if ( !empty( $curr ) ) {
				// Set currency via cookie
				setcookie( 'currency', $currency, time() + 3600 * 24 * 7, '/' );
			}
		}
		redirect();
	}
}