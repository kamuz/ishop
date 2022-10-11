<?php

namespace app\controllers;

class PageController extends AppController{

	public function indexAction(){
		$this->setMeta( 'All pages', 'Another description' );
		$messages = \R::findAll( 'messages' );
		// debug( $messages );
		$this->set( [ 'messages' => $messages ] );
	}

	public function viewAction(){
		echo __METHOD__;
	}
}