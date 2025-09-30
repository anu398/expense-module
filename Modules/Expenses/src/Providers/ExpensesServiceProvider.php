<?php

namespace Modules\Expenses\Providers;

use Illuminate\Support\ServiceProvider;

class ExpensesServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/route.php');
    }

    public function boot()
    {
          $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
    }
}
