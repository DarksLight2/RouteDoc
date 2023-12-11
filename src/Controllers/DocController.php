<?php

namespace DarksLight2\RouteDoc\Controllers;

use DarksLight2\RouteDoc\Resolver;
use App\Http\Controllers\Controller;
use DarksLight2\RouteDoc\Attributes\RouteDoc;

#[RouteDoc("description", "method", ["except_params" => "rule"], ["success_response"], ["error_response"])]
class DocController extends Controller
{
    public function main()
    {
        return view('route_doc::main', [
            'routes' => app(Resolver::class)->handle()
        ]);
    }
}
