<?php
/*
	Plugin Name: WP Restful Resource JSON API
	Description: WordPress Restful Resource JSON API Using WPSpokes Framework
	Author: Brian Zeligson
	Version: 0.1-alpha
	Author URI: http://github.com/beezee
 */

class WPAPI
{

  public static function initialize()
  {
    \WPSpokes::instance()->register_autoloader('WPAPI', dirname(__FILE__));
    self::add_routes();
  }

  public static function add_routes()
  {
    \WPSpokes::instance()->router->map('/api/posts', '\WPAPI\Controllers\Posts#index');
    \WPSpokes::instance()->router->map('/api/users', '\WPAPI\Controllers\Users#index');
    \WPSpokes::instance()->router->map('/api/tags', '\WPAPI\Controllers\Tags#index');
    \WPSpokes::instance()->router->map('/api/categories', '\WPAPI\Controllers\Categories#index');
  }
}

add_action('wpmvc_loaded', array('WPAPI', 'initialize'));