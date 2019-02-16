<?php
namespace App\Http;

class Kanel
{
    public function __construct(array $routings)
    {
        routing()->routings($routings);
    }


    public function run()
    {
        // Routing
        list($controller, $action, $parameters) = routing()->get();

        timelines("Before action !");

        // ControllerのActionを実施し、レスポンスを送る
        app($controller)->{$action}($parameters);
    }
}