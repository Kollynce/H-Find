<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class DealsComposerProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->composerDeals();
    }

    public function composerDeals()
    {
        view()->composer('inc.deals','App\Http\Composers\DealsComposer');
    }
}
