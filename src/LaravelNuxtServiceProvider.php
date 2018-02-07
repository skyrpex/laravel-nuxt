<?php

namespace Pallares\LaravelNuxt;

use Illuminate\Support\ServiceProvider;

class LaravelNuxtServiceProvider extends ServiceProvider
{
    public function boot()
    {
        //
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/nuxt.php', 'nuxt');
    }
}
