<?php

namespace App\Providers;

use Illuminate\Foundation\Vite;
use Illuminate\Support\Facades\URL;
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
        $this->createViteMacros();
        $this->configureUrls();
    }

    private function configureUrls(): void
    {
        if ($this->app->environment(['production', 'staging'])) {
            URL::forceScheme('https');
        }
    }

    private function createViteMacros(): void
    {
        $vite = new Vite;
        Vite::macro('image', fn (string $asset) => $vite->asset("resources/img/{$asset}"));
        Vite::macro('script', fn (string $asset) => $vite->asset("resources/js/{$asset}"));
    }
}
