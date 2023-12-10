<?php

namespace DarksLight2\ApiDoc\DTOs;

readonly class RouteDTO
{
    public function __construct(
        public array $methods,
        public string $uri,
        public string $description,
    ) { }
}
