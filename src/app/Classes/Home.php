<?php

namespace App\Classes;

class Home
{

  public function index():string
  {
    //Cookies to be sent prior to any output
    setcookie(
      'NameMyCookie',
      'Value123',
      time() + 10
    );
    return 'Home';
  }
}
