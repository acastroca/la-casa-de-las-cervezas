<?php

namespace App\Providers;

use App\Models\ComunidadAutonoma;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Esto inyecta la variable $comunidades_menu en todas las vistas
        View::composer('*', function ($view) {
            $view->with('comunidades_menu', ComunidadAutonoma::orderBy('id')->get());
        });
    }
}
