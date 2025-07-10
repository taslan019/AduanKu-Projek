<?php

namespace App\Providers;

use App\Models\Aduan;
use App\Observers\AduanObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Aduan::observe(AduanObserver::class);
    }
}
