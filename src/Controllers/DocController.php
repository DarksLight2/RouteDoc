<?php

namespace DarksLight2\RouteDoc\Controllers;

use DarksLight2\RouteDoc\Resolver;
use App\Http\Controllers\Controller;

class DocController extends Controller
{
    /**
     * @throws \Exception
     */
    public function main()
    {
        return view('route_doc::main', [
            'routes' => app(Resolver::class)->handle()
        ]);
    }
}
