<?php

namespace WPAPI\Controllers;

class APIController extends \WPSpokes\Framework\Controller
{

  public function before()
  {
    header('Content-Type: application/json');
  }

  public function model_class()
  {
    $class = get_called_class();
    return $class::MODEL_CLASS;
  }

  public function index()
  {
    $class = $this->model_class();
    $q = $class::whereRaw('1 = 1');
    foreach($_GET as $key => $val)
      $q = $q->where($key, '=', $val);
    echo $q->get()->toJSON();
  }
}
