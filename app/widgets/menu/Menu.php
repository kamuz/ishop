<?php

namespace app\widgets\menu;

use ishop\Cache;
use ishop\App;

class Menu {

	protected $data;
	protected $tree;
	protected $menuHtml;
	protected $tpl = __DIR__ . '/tpl/default.php';
	protected $container = 'ul';
	protected $containerClass = 'top-menu';
	protected $table = 'category';
	protected $cacheTime = 3600;
	protected $cacheKey = 'ishop_menu';
	protected $attrs = [];
	protected $prepend = '';

	/**
	 * Define template and get custom params for the menu
	 */
	public function __construct( $options = [] ) {
		$this->getOptions( $options );
		$this->run();
	}

	/**
	 * Redefine options inside template
	 */
	protected function getOptions( $options ) {
		foreach ( $options as $k => $v ) {
			if ( property_exists( $this, $k ) ) {
				$this->$k = $v;
			}
		}
	}

	/**
	 * Build menu
	 */
	protected function run() {
		$cache = Cache::instance();
		$this->menuHtml = $cache->get( $this->cacheKey );
		if ( !$this->menuHtml ) {
			$this->data = App::$app->getProperty( 'cats' );
			if ( !$this->data ) {
				$this->data = \R::getkAssoc( "SELECT * FROM {$this->table}" );
			}
			$this->tree = $this->getTree();
			$this->menuHtml = $this->getMenuHtml( $this->tree );
			if ( $this->cacheTime ) {
				$cache->set( $this->cacheKey, $this->menuHtml, $this->cacheTime );
			}
		}
		$this->output();
	}

	/**
	 * Render HTML menu
	 */
	protected function output() {
		$attrs = '';
		if ( !empty( $this->attrs ) ) {
			foreach ( $this->attrs as $k => $v ) {
				$attrs .= "$k=\"$v\"";
			}
		}
		echo '<' . $this->container . ' class="' . $this->containerClass . '" ' . $attrs . '>';
		echo $this->menuHtml;
		echo '<' . $this->container . '/>';
	}

	/**
	 * Create new array as tree from the table
	 */
	protected function getTree() {
		$tree = [];
		$data = $this->data;
		foreach ( $data as $id => &$node ) {
			// If have no child
			if ( !$node['parent_id'] ) {
				$tree[$id] = &$node;
			} else {
				// If have childs
				$data[$node['parent_id']]['childs'][$id] = &$node;
			}
		}
		return $tree;
	}

	/**
	 * Buld tree menu
	 */
	protected function getMenuHtml( $tree, $tab = '' ) {
		$str = '';
		foreach ( $tree as $id => $category ) {
			$str .= $this->catToTemplate( $category, $tab, $id );
		}
		return $str;
	}

	/**
	 * Buffer output for build full tree menu
	 */
	protected function catToTemplate( $category, $tab, $id ) {
		ob_start();
		require $this->tpl;
		return ob_get_clean();
	}
}