<?php

namespace ishop;

class Registry {

	use Singletone;

	protected static $properties = [];

	// Set property
	public static function setProperty($name, $value){
		self::$properties[$name] = $value;
	}

	// Get property
	public function getProperty($name){
		if(isset(self::$properties[$name])){
			return self::$properties[$name];
		} else {
			return null;
		}
	}

	// Get all properties
	public function getProperties(){
		return self::$properties;
	}
}