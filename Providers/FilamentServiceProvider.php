<?php

namespace Modules\Pos\Providers;

use Filament\Facades\Filament;
use Filament\Navigation\NavigationGroup;
use Filament\PluginServiceProvider;
use Modules\Pos\Filament\Resources\FoodResource;
use Modules\Pos\Filament\Resources\RestaurantResource;
use Spatie\LaravelPackageTools\Package;
use Modules\Pos\Filament\Pages\PosPage;

class FilamentServiceProvider extends PluginServiceProvider
{
    public function isEnabled(): bool{
        $module = \Module::find('pos');
        return $module->isEnabled();
    }
    protected array $pages = [];
    protected array $resources =[
        RestaurantResource::class,
        FoodResource::class,
    ];
    public function configurePackage(Package $package): void
    {
        $package->name('pos');
    }

    public function getResources(): array
    {
        return ($this->isEnabled())?$this->resources:[];
    }

    public function getPages(): array
    {
        return ($this->isEnabled())?$this->pages:[];
    }

    public function boot()
    {
        Filament::serving(function (){
            if(config('pos.navigation.enabled'))
            Filament::registerNavigationGroups([
                NavigationGroup::make()
                    ->label(config('pos.navigation.name'))
            ]);
        });
        return parent::boot();
    }
}
