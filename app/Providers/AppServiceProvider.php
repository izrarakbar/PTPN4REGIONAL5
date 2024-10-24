<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Filament\Support\Facades\FilamentView;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Route; // Pastikan untuk mengimpor Route

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
        // Tambahkan redirect di sini
        Route::redirect('/', '/digilib');

        FilamentView::registerRenderHook(
            'panels::auth.login.form.after',
            fn(): string => Blade::render('@vite(\'resources/css/custom.css\')')
        );
    }
}
