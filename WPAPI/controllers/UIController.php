<?php

namespace WPAPI\Controllers;

class UIController extends \WPSpokes\Framework\Controller
{
  
  private $_plugin;

  public function get_plugin()
  {
    return $this->_plugin ?: $this->_plugin = new \WPAPI();
  }

  public function get_assets_url()
  {
    return $this->plugin->assets_url();
  }

  public function kitchen_sink()
  {
    $this->render('\\ui\kitchen_sink');
  }
}
