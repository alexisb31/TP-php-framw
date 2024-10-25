<?php

namespace Core;

use App\Controllers\HomeController;

class Router
{
    protected $routes;
    protected $uri;

    public function __construct()
    {
        $this->uri = '/' . trim($_SERVER['REQUEST_URI'], '/');
        $this->uri = parse_url($this->uri, PHP_URL_PATH); 

        $this->routes = require('../app/routes.php');
    }

    public function toController()
    {
        foreach ($this->routes as $route => $target) {

            if (preg_match($this->getPattern($route), $this->uri, $matches) == 1) {

                array_shift($matches);

                list($controllerName, $methodName) = explode('.', $target);

                $controllerName = 'App\Controllers\\' . ucfirst($controllerName) . 'Controller';

                $controller = new $controllerName;
                $controller->{$methodName}(...$matches);
                break;

            }
        }

        if (!isset($controller)) {
            echo '404';
        }
    }

    protected function getPattern($route)
    {
        $patterns = [
            '{alphanum}' => '([a-z0-9\-]+)',
            // '{alpha}' => '([a-z\-]+)',
            '{num}' => '([0-9]+)',
        ];

        $pattern = str_replace(array_keys($patterns), $patterns, $route);
        $pattern = '#^/' . ltrim($pattern, '/') . '$#i';

        return $pattern;
    }
}