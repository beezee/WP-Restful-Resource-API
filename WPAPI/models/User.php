<?php

namespace WPAPI\Models;

class User extends \WPSpokes\Framework\Models\User
{
  protected $hidden = array('user_pass');
}
