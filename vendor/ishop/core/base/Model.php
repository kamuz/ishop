<?php

namespace ishop\base;

use ishop\Db;

abstract class Model {

	public $attributes = [];
	public $errors = [];
	public $rules = [];

	// Define app variables
	public function __construct() {
		Db::instance();
	}
}