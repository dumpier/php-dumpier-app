<?php
namespace App\Http;

class Kanel
{
    public function run()
    {
        // Routing
        list($controller, $action, $parameters) = routing()->get();

        timelines("Before action !");

        // ControllerのActionを実施し、レスポンスを送る
        app($controller)->{$action}($parameters);
    }
}