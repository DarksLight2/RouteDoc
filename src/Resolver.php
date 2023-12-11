<?php

namespace DarksLight2\RouteDoc;

use ReflectionAttribute;
use Illuminate\Routing\Route;
use Illuminate\Routing\Router;
use Illuminate\Support\Collection;
use DarksLight2\RouteDoc\DTOs\RouteDTO;
use DarksLight2\RouteDoc\DTOs\MethodDTO;
use DarksLight2\RouteDoc\Attributes\RouteDoc;

readonly class Resolver
{
    public function __construct(public Router $router)
    {
    }

    /**
     * @param ReflectionAttribute[] $attributes
     * @return array
     */
    private function resolveRouteMethods(array $attributes): array
    {
        $methods = [];
        array_walk($attributes, function ($attr) use (&$methods) {
            $args = $attr->getArguments();
            $methods[$args[1]] = new MethodDTO(
                $args[0],
                $args[3] ?? [],
                $args[4] ?? [],
                $args[2] ?? [],
            );
        });

        return $methods;
    }

    public function handle(): Collection
    {
        $resolved = collect();

        $routes = $this->router->getRoutes()->getRoutes();

        array_walk($routes, function (Route $route) use (&$resolved) {
            try {
                $controller = $route->getControllerClass();
            } catch (\Throwable) {
                return;
            }

             if(empty($controller)) return;

            $reflection = new \ReflectionClass($controller);

            if(!empty($attr = $reflection->getAttributes(RouteDoc::class))) {
                $resolved->add(new RouteDTO(
                    methods: $this->resolveRouteMethods($attr),
                    uri: $route->uri,
                ));
            }
        });

        return $resolved;
    }
}
