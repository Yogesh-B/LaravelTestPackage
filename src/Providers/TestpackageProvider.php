<?php
namespace Yogeshb\Laraveltestpackage\Providers;
use Illuminate\Support\ServiceProvider;

class TestpackageProvider extends ServiceProvider
{
    public function register()
    {
        // $this->app->bind('Testpackage', function ($app) {
        //     return new Testpackage();
        // });
        $this->publishes([
            __DIR__.'/../config/laraveltestpackage.php' => config_path('laraveltestpackage.php'),
        ],'test-package-config');
    }

    public function boot()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/laraveltestpackage.php', 'laraveltestpackage');
    }
}