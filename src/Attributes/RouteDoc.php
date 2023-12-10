<?php

namespace DarksLight2\ApiDoc\Attributes;

#[\Attribute(\Attribute::TARGET_METHOD)]
readonly class RouteDoc
{
    public function __construct(public string $description = '')
    {
    }
}
