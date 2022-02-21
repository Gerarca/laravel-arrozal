<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\App;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer(['front.index', 'layouts.front'], function ($view) {

            if( App::getLocale() == 'es' ){
                $Contacto = \App\Models\Contacto::all();
            }else{
                $Contacto = \App\Models\Contacto::get(['direccion_en as direccion', 'telefono', 'email', 'horario_en as horario', 'instagram', 'facebook', 'linkedin']);
            }

            $view->with('Contacto', $Contacto);
        });
    }
}
