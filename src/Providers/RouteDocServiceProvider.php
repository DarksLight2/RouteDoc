<?php

namespace DarksLight2\RouteDoc\Providers;

use Illuminate\Support\ServiceProvider;

class RouteDocServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/api_doc.php');
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'route_doc');
        $this->publishes([
            __DIR__ . '../../resources/views' => resource_path('views/vendor/route_doc')
        ]);
    }

    public function register()
    {

    }
}
