<?php

namespace App\Providers;

use Filament\Facades\Filament;
use Symfony\Component\Routing\Route;
use Filament\Navigation\UserMenuItem;
use Illuminate\Support\ServiceProvider;
use Filament\Tables\Columns\Layout\Panel;


class FilamentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //

       

        Filament::serving(function () {

             // Using Vite
            Filament::registerViteTheme('resources/css/filament.css');

            Filament::registerUserMenuItems([
                UserMenuItem::make()
                    ->label('Portofolio')
                    ->url('/')
                    ->icon('heroicon-s-badge-check'),
                // ...
            ]);
        });
        
    }
    
    
        
}
