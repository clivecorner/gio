<?php

namespace App;
use App\Exceptions\RouteNotFoundException;
use App\View;
use App\DB;
use App\Config;

/**
 *@property-read ?array $db
 */

class App
{

    private static DB $db;

    public function __construct(protected Router $router, protected array $request, protected Config $config)
    {
        //Create DB connection using the config details and store it in $db
        static::$db = new DB($config->db ?? []);
    }

    public static function db(): DB
    {
        return static::$db;
    }

    public function run()
    {
        try {
            //NB we are echoing which means writing to the output and we are gonna
            //run the resolve on router NB no parameters are sent
            echo $this->router->resolve(
                $this->request['uri'],
                strtolower($this->request['method'])
            );
        } catch (RouteNotFoundException) {

            http_response_code(404);
            echo View::make('error/404');
        }
    }
}
