<?php

use ishop\Router;

// Admin routes
Router::add( '^admin$', ['controller' => 'Main', 'action' => 'index', 'prefix' => 'admin' ] ); // default admin URL
Router::add( '^admin/?(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$', ['prefix' => 'admin'] ); // any name for controller/action for admin
// Router::add('^admin/?(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$', ['prefix' => 'admin']);

// Default routes
Router::add( '^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$' ); // any name for controller/action
Router::add( '^$', ['controller' => 'Main', 'action' => 'index'] ); // empty string - only site URL, without query string