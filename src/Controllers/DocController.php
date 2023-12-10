<?php

namespace DarksLight2\ApiDoc\Controllers;

use DarksLight2\ApiDoc\Resolver;
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
