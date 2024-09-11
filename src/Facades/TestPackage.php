<?php

namespace Yogeshb\Laraveltestpackage\Facades;

use Illuminate\Support\Facades\Facade;

class TestPackage extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Yogeshb\Laraveltestpackage\TestPackage::class;
    }
}