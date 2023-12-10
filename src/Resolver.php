<?php

namespace DarksLight2\RouteDoc;

use Illuminate\Routing\Route;
use Illuminate\Routing\Router;
use DarksLight2\RouteDoc\DTOs\RouteDTO;
use DarksLight2\RouteDoc\Attributes\RouteDoc;

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
            try {
                $controller = $route->getControllerClass();
            } catch (\Throwable $e) {
                \Log::error($e->getMessage(), [
                    'file' => $e->getFile(),
                    'line' => $e->getLine(),
                ]);
                return;
            }
             if(empty($controller)) return;

            $reflection = new \ReflectionClass($controller);
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
