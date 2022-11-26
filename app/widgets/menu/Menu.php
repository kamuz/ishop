<?php

namespace app\widgets\menu;

use ishop\Cache;
use ishop\App;

class Menu {

	protected $data;
	protected $tree;
	protected $menuHtml;
	protected $tpl;
	protected $container = 'ul';
	protected $table = 'category';
	protected $cache = 3600;
	protected $cacheKey = 'ishop_menu';
	protected $attrs = [];
	protected $prepend = '';

	public function __construct( $options = [] ) {
		$this->tpl = __DIR__ . '/tpl/menu.php';
		$this->getOptions( $options );
		// debug( $this->table );
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
		}
		debug( $this->tree );
		$this->output();
	}

	protected function output() {
		echo $this->menuHtml;
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

	protected function getMenuHtml( $tree, $tab = '' ) {
		$str = '';
		foreach ( $tree as $id => $category ) {
			$str .= $this->catToTemplate( $category, $tab, $id );
		}
		return $str;
	}

	protected function catToTemplate( $category, $tab, $id ) {
		ob_start();
		require_once $this->tpl;
		return ob_get_clean();
	}
}