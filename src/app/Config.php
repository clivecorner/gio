<?php

namespace App;

class Config
{
  protected array $config = [];

  public function __construct(array $env)
  {

    $this->config = [
      'db' =>[
              'host'     => $env['DB_HOST'],
              'database' => $env['DB_DATABASE'],
              'user'     => $env['DB_USER'],
              'pass'     => $env['DB_PASS']
      ]
    ];
  }

  public function __get($name)
  {
    return $this->config[$name] ?? null;
  }
}
