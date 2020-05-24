<?php

namespace Phamdungtsx\LumenRoutesList;

use Illuminate\Support\ServiceProvider;

class RoutesCommandServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->commands('Phamdungtsx\LumenRoutesList\RoutesCommand');
    }
}
