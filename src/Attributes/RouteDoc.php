<?php

namespace DarksLight2\RouteDoc\Attributes;

#[\Attribute(\Attribute::TARGET_METHOD)]
readonly class RouteDoc
{
    public function __construct(public string $description = '')
    {
    }
}
