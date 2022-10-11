<?php

namespace ishop;

class Router {

	// All routes
	protected static $routes = [];
	// Current route
	protected static $route = [];

	// Add rule to the routes
	public static function add( $regexp, $route = [] ) {
		self::$routes[ $regexp ] = $route;
	}

	// Get all routes
	public static function getRoutes() {
		return self::$routes;
	}

	// Get current route
	public static function getRoute() {
		return self::$route;
	}

	// Work with URL
	public static function dispatch( $url ) {
		$url = self::removeQueryString( $url );
		if ( self::matchRoute( $url ) ) {
			// Set path to controller
			$controller = 'app\controllers\\' . self::$route['prefix'] . self::$route['controller'] . 'Controller';
			if ( class_exists( $controller ) ) {
				// Create object controller and passed route
				$controllerObject = new $controller( self::$route );
				// Get current action
				$action = self::lowerCamelCase( self::$route['action'] ) . 'Action';
				if ( method_exists( $controllerObject, $action ) ) {
					// Call action
					$controllerObject->$action();
					$controllerObject->getView();
				} else {
					throw new \Exception( "Method $controller::$action not found" );
				}
			} else {
				throw new \Exception( "Controller $controller not found" );
			}
		} else {
			// Route not found
			throw new \Exception( "Page not found", 404 );
		}
	}

	// Search matched route, compare query string and route or regular expression
	public static function matchRoute( $url ) {
		foreach ( self::$routes as $pattern => $route ) {
			if ( preg_match( "#${pattern}#", $url, $matches ) ) {
				// Get only items of array with string keys
				foreach( $matches as $key => $value ) {
					if ( is_string( $key ) ) {
						$route[ $key ] = $value;
					}
				}
				// If route empty - set default action controller
				if ( empty( $route['action'] ) ) {
					$route['action'] = 'index';
				}
				// Add empty prefix by default or add additional backslash
				if ( empty( $route['prefix'] ) ) {
					$route['prefix'] = '';
				} else {
					$route['prefix'] .= '\\';
				}
				$route['controller'] = self::upperCamelCase( $route['controller'] );
				// Set current route
				self::$route = $route;
				return true;
			}
		}
		return false;
	}

	// For controllers, example - CamelCase
	protected static function upperCamelCase( $name ) {
		// From page-new to PageNew
		$name = str_replace( ' ', '', ucwords( str_replace( '-', ' ', $name ) ) );
		return $name;
	}

	// For actions, example - camelCase
	protected static function lowerCamelCase( $name ) {
		return lcfirst( self::upperCamelCase( $name ) );
	}

	// Remove query string from URL
	protected static function removeQueryString( $url ) {
		if ( $url ) {
			$params = explode( '&', $url, 2 );
			if ( ! strpos( $params[0] , '=') ) {
				return rtrim( $params[0], '/' );
			} else {
				return '';
			}
		}
	}
}