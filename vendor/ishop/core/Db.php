<?php

namespace ishop;

class Db {

	use Singletone;

	protected function __construct() {

		// Include database params as array
		$db = require_once CONF . '/db.php';

		// Create alias
		class_alias( '\RedBeanPHP\R', '\R' );

		// Database connection with RedBeanPHP
		\R::setup( $db['dsn'], $db['user'], $db['pass'] );

		// Test connection
		if ( ! \R::testConnection() ) {
			throw new \Exception( 'No connection with database', 500 );
		} else {
			echo '<p>Success connection.</p>';
		}

		// Freeze tables
		\R::freeze( true );

		// Enable debug mode
		if ( DEBUG ) {
			\R::debug( true, 1 );
		}
	}
}