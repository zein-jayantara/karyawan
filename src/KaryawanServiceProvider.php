<?php

namespace Jalinmodule\Karyawan;

use Illuminate\Support\ServiceProvider;

class KaryawanServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/inventaris/karyawan'),
        ]);
        $this->publishes([
            __DIR__.'/migrations' => base_path('database/migrations'),
        ],'migrations');
        $this->publishes([
            __DIR__ . '/config/config.php' => config_path('karyawan.php'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__.'/routes/routes.php';
        $this->app->make('Jalinmodule\Karyawan\Controllers\KaryawanController');
    }
}
