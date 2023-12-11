<?php

namespace DarksLight2\RouteDoc\Attributes;

#[\Attribute(\Attribute::TARGET_CLASS | \Attribute::IS_REPEATABLE)]
readonly class RouteDoc
{
    public function __construct(
        public string $description = '',
        public string $method = '',
        public array $params = [],
        public array $return_success = [],
        public array $return_error = [],
    )
    {
    }
}
