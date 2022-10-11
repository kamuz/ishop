<?php

namespace ishop;

class App{

	public static $app;

	public function __construct(){
		$query = trim($_SERVER['QUERY_STRING'], '/');
		session_start();
		// Singleton instance
		self::$app = Registry::instance();
		// Get params init
		$this->getParams();
		// Error handler init
		new ErrorHandler();
		// Check route
		Router::dispatch( $query );
	}

	// Loop params from file and set as object properties
	protected function getParams(){
		$params = require_once CONF . '/params.php';
		if(!empty($params)){
			foreach($params as $key => $value){
				self::$app->setProperty($key, $value);
			}
		}
	}
}