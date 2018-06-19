<?php

namespace Miomo\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Miomo\Jornada;
use View;
use Carbon\Carbon;
use Session;
use URL;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //Importante agregar esto debido a que sino ocasiona un error al realizar
        //la migración NO QUITAR.
        Schema::defaultStringLength(191);

        if (env('APP_ENV') != 'local'){
            URL::forceScheme('https');
        }

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    public function jornadaActual()
    {
      //$now = Carbon::now();
      $now = Carbon::parse('2018-06-14');
      $jornada =Jornada::where('fecha_inicio','>=',$now)->orWhere('fecha_fin','<=',$now)->first();

      return $jornada;

    }

}
