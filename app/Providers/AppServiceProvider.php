<?php

namespace App\Providers;

use App\Repositories\IndexRepository;
use App\Repositories\Interfaces\IndexRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(IndexRepositoryInterface::class, IndexRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
