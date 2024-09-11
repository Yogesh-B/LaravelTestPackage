<?php
namespace Yogeshb\Laraveltestpackage\Providers;
use Illuminate\Support\ServiceProvider;

class TestpackageProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('Testpackage', function ($app) {
            return new Testpackage();
        });
    }
}