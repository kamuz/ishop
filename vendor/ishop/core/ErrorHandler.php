<?php

namespace ishop;

class ErrorHandler{
	// Show or hide errors
	public function __construct(){
		if(DEBUG){
			error_reporting(-1);
		}else{
			error_reporting(0);
		}
		// Run exception handler
		set_exception_handler([$this, 'exceptionHandler']);
	}

	// Define exception handler
	public function exceptionHandler($e){
		$this->logErrors($e->getMessage(), $e->getFile(), $e->getLine());
		$this->displayError('Exception', $e->getMessage(), $e->getFile(), $e->getLine(), $e->getCode());
	}

	// Log errors to the file
	protected function logErrors($message = '', $file = '', $line = ''){
		error_log("[" . date('Y-m-d H:i:s') . "] Text error: $message | File: $file | Line: $line \n========================\n", 3, ROOT . '/tmp/errors.log');
	}

	// Display errors to the template
	protected function displayError($errno, $errstr, $errfile, $errline, $response = 404){
		http_response_code($response);
		if($response == 404 && !DEBUG){
			require WWW . '/errors/404.php';
			die;
		} elseif(DEBUG){
			require WWW . '/errors/dev.php';
			die;
		} else {
			require WWW . '/errors/prod.php';
			die;
		}
	}
}