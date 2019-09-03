<?php

namespace App\core;

class Router
{
    function __construct()
    {
        $this->controllerName = ($_GET["t"] ?? 'site') . 'Controller';

        $this->actionName = 'action' . ($_GET["a"] ?? 'home');
    }

    public function Run()
    {
        $className = "App\\Controller\\{$this->controllerName}";

        if (class_exists($className)) {
            $MVC = new $className();

            if (method_exists($MVC, $this->actionName)) {
                $MVC->{$this->actionName}();
            } else {
                echo "нет такого метода: $this->actionName";
            }
        } else {
            echo "нет такого класса: $this->controllerName";
        }
    }
}
