<?php

namespace WPAPI\Controllers;

class ExampleController extends \WPSpokes\Framework\Controller
{

  public function hello($name='')
  {
    $this->render('\\example\hello', array('name' => $name));
  }
}
