<?php

namespace TNM\OCS;

use Illuminate\Support\ServiceProvider;

class OcsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/ocs.php' => config_path('ocs.php'),
        ]);

    }

    public function register()
    {

    }

}
