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

  public static function create_resource($resource_name)
  {
    \WPSpokes::instance()->router->map("/api/$resource_name", '\WPAPI\Controllers\\'.ucfirst($resource_name).'#index');
    \WPSpokes::instance()->router->map("/api/$resource_name/:id", '\WPAPI\Controllers\\'.ucfirst($resource_name).'#show');
  }

  public static function add_routes()
  {
    \WPSpokes::instance()->router->map('/api/kitchen-sink', '\WPAPI\Controllers\UI#kitchen_sink');
    foreach(array('posts', 'users', 'tags', 'categories') as $resource)
      self::create_resource($resource);
  }

  public function assets_url()
  {
    return plugin_dir_url(__FILE__).'assets/';
  }
}

add_action('wpmvc_loaded', array('WPAPI', 'initialize'));
