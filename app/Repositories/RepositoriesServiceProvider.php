<?php
namespace App\Repositories;

use Illuminate\Support\ServiceProvider;

class RepositoriesServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(
            'App\Repositories\TestInterface',
            'App\Repositories\TestRepository1',
            'App\Repositories\MessageInterface',
            'App\Repositories\MessageRepository',
        );
    }
}
