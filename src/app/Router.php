<?php

namespace App;

use App\Exceptions\RouteNotFoundException;

class Router
{

  private array $routes;
    
  /**
   * register
   *NB $action is either a function or else an array containing a class or a method
   * @param  mixed $route
   * @param  mixed $action
   * @return self
   */
  public function register(string $requestMethod,string $route, callable | array $action):self
  {
    //Maps the $action array (the class and method name) to the request method (GET or POST) and and the route (URI) eg /
    $this->routes[$requestMethod][$route] = $action;
    return $this;
  }

  public function get(string $route, callable | array $action):self
  {
    return $this->register('get', $route, $action);
  }


  public function post(string $route, callable | array $action):self
  {
    return $this->register('post', $route, $action);
  }
  
  public function routes():array
  {
    return $this->routes;
  }
  //The 
  public function resolve(string $requestURI,string $requestMethod, array $params = []):string
  {
    $route = explode('?', $requestURI)[0];
    //This is the heart of the routing where we match the  request method and the route against the stored request method and route 
    $action = $this->routes[$requestMethod][$route] ?? null;


    if(! $action){
      throw new RouteNotFoundException;
    }
    if (is_callable($action)) {
      return call_user_func($action);
    }

    

    if(is_array($action)){
      [$class, $method] = $action;

      if(class_exists($class)){
        $class = new $class();

        if(method_exists($class,$method)){
          //We run the method within the controller class
          return call_user_func_array([$class, $method], []);
        }
      }
    }
    throw new RouteNotFoundException();
  }
}

