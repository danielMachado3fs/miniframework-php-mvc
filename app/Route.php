<?php

namespace App;

use MF\Init\Bootstrap;

class Route extends Bootstrap
{
    protected function initRoutes()
    {
        $routes["home"] = [
            "route" => "/",
            "controller" => "index",
            "action" => "index",
        ];

        $routes["sobre_nos"] = [
            "route" => "/sobre_nos",
            "controller" => "index",
            "action" => "sobreNos",
        ];

        $this->setRoutes($routes);
    }
}
