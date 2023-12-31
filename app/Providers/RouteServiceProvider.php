<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    const HOME = '/';

    public function boot()
    {
        $this->routes(function () {
            Route::middleware('web')->group(base_path('routes/web.php'));
        });
    }
}
