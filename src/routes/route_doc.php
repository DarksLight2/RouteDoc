<?php

use Illuminate\Support\Facades\Route;
use DarksLight2\ApiDoc\Controllers\DocController;

Route::prefix('routes/doc')->group(function () {
    Route::get('', [DocController::class, 'main']);
});
