<?php

namespace DarksLight2\RouteDoc\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class RouteDocServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        Blade::component('route_doc::layout', 'rd-layout');
        Blade::component('route_doc::primary-button', 'rd-primary-button');
        Blade::component('route_doc::error-button', 'rd-error-button');
        Blade::component('route_doc::success-button', 'rd-success-button');
        Blade::component('route_doc::item', 'rd-item');

        $this->loadRoutesFrom(__DIR__ . '/../routes/route_doc.php');
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'route_doc');
        $this->publishes([
            __DIR__ . '../../resources/views' => resource_path('views/vendor/route_doc')
        ]);
    }

    public function register()
    {

    }
}
