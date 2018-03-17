<?php

namespace Ollywarren\Prestashop;

use Illuminate\Support\ServiceProvider;
use Ollywarren\Prestashop\Services\PrestashopService;

class PrestashopServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([__DIR__.'/config/prestashop.php' => config_path('prestashop.php'),]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('Prestashop', PrestashopService::class);
    }
}