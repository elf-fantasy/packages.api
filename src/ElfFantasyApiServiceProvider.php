<?php

namespace ElfFantasy\API;

use Illuminate\Support\ServiceProvider;

class ElfFantasyApiServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/elffantasy-api.php', 'elffantasy-api');
    }

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/elffantasy-api.php' => config_path('elf-fantasy.php'),
            ], 'config');
        }
    }
}
