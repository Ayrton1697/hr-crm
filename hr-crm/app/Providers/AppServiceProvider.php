<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Filament\Facades\Filament;
use Filament\Navigation\NavigationGroup;
use Buildix\Timex\TimexServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      
        Filament::serving(function () {
            Filament::registerNavigationGroups([
                NavigationGroup::make()
                     ->label('Shop')
                     ->icon('heroicon-s-shopping-cart'),
                NavigationGroup::make()
                    ->label('Blog')
                    ->icon('heroicon-s-pencil'),
                NavigationGroup::make()
                    ->label('Settings')
                    ->icon('heroicon-s-cog')
                    ->collapsed(),
            ]);
            Filament::registerTheme(
                mix('css/filament.css'),
            );
            // Filament::registerStyles([
            //     // 'https://unpkg.com/tippy.js@6/dist/tippy.css',
            //     asset('css/filament.css'),
            // ]);
        });
    }
}
