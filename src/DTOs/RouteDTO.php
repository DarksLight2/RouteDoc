<?php

namespace DarksLight2\RouteDoc\DTOs;

readonly class RouteDTO
{
    public function __construct(
        public array $methods,
        public string $uri,
    ) { }
}
