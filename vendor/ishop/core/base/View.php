<?php

namespace ishop\base;

class View {

	public $route;
	public $controller;
	public $model;
	public $view;
	public $layout;
	public $prefix;
	public $data = [];
	public $meta = [];

	// Define app variables
	public function __construct( $route, $layout = '', $view = '', $meta ) {
		// debug($route);
		$this->route = $route;
		$this->controller = $route['controller'];
		$this->model = $route['controller'];
		$this->view = $view;
		$this->prefix = $route['prefix'];
		$this->meta = $meta;
		$this->layout = $layout;

		// Set layout name
		if ( $layout === false ) {
			$this->layout === false;
		} else {
			$this->layout = $layout ? $layout : LAYOUT;
		}
	}

	// Render layout and views
	public function render( $data ){
		if ( is_array( $data ) ) {
			extract( $data );
		}
		// Path to current view
		$viewFile = APP . strtolower( "/views/{$this->prefix}{$this->controller}/{$this->view}.php" );
		if ( is_file( $viewFile ) ) {
			// Get view content to buffer
			ob_start();
			require_once $viewFile;
			$content = ob_get_clean();
		} else {
			throw new \Exception( "View {$viewFile} is not found", 500 );
		}
		// Only if need layout
		if ( false !== $this->layout ) {
			// Path to current layout
			$layoutFile = APP . "/views/layouts/{$this->layout}.php";
			if( is_file( $layoutFile ) ) {
				require_once $layoutFile;
			} else {
				throw new \Exception( "Layout {$layoutFile} is not found", 500 );
			}
		}
	}

	// Get meta data
	public function getMeta() {
		$output = '<title>' . $this->meta['title'] . '</title>' . PHP_EOL;
		$output .= '<meta name="description" content="' . $this->meta['description'] . '">';
		return $output;
	}
}