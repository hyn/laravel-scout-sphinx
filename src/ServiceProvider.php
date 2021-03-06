<?php

namespace Hyn\SphinxScout;

use Illuminate\Support\ServiceProvider as Provider;
use Laravel\Scout\EngineManager;

class ServiceProvider extends Provider
{
    public function boot()
    {
        resolve(EngineManager::class)->extend('sphinxsearch', function ($app) {
            return new Engine();
        });
    }
}