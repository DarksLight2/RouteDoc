<?php

namespace DarksLight2\RouteDoc\DTOs;

readonly class MethodDTO
{
    public function __construct(
        public string $description = 'empty description',
        public array $return_success = [],
        public array $return_error = [],
        public array $params = [],
    )
    {
    }
}
