<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AgentComposerProvider extends ServiceProvider
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
        $this->composerAgent();
    }

    public function composerAgent()
    {
        view()->composer('inc.agent','App\Http\Composers\AgentComposer');
    }
}
