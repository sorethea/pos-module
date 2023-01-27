<?php

namespace Modules\Pos\Filament\Resources\RestaurantResource\Pages;

use Modules\Pos\Filament\Resources\RestaurantResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRestaurants extends ListRecords
{
    protected static string $resource = RestaurantResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
