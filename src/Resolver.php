<?php

namespace DarksLight2\ApiDoc;

use Illuminate\Routing\Route;
use Illuminate\Routing\Router;
use DarksLight2\ApiDoc\DTOs\RouteDTO;
use DarksLight2\ApiDoc\Attributes\RouteDoc;

readonly class Resolver
{
    public function __construct(public Router $router)
    {
    }

    public function handle()
    {
        $resolved = collect();

        $routes = $this->router->getRoutes()->getRoutes();
        array_walk(
        /**
         * @throws \ReflectionException
         */ $routes, function (Route $route) use ($resolved) {

             if(empty($route->getControllerClass())) return;

            $reflection = new \ReflectionClass($route->getControllerClass());
            $methods = $reflection->getMethods();
            array_walk($methods, function (\ReflectionMethod $method) use ($resolved, $route) {
                if(!empty($attr = $method->getAttributes(RouteDoc::class))) {
                    $resolved->add(new RouteDTO(
                        methods: $route->methods,
                        uri: $route->uri,
                        description: $attr[0]->getArguments()[0]
                    ));
                }
            });
        });

        return $resolved;
    }
}
