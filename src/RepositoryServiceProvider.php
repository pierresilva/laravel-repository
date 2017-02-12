<?php

namespace pierresilva\Repository;

use Illuminate\Support\ServiceProvider;
use pierresilva\Repository\Listeners\RepositoryEventListener;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('pierresilva.repository.listener', RepositoryEventListener::class);
    }

    /**
     * Register any other events for your application.
     *
     * @return void
     */
    public function boot()
    {
        $this->app['events']->subscribe('pierresilva.repository.listener');
    }
}
