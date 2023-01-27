<?php

namespace Modules\Pos\Filament\Resources\FoodResource\Pages;

use Modules\Pos\Filament\Resources\FoodResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFood extends EditRecord
{
    protected static string $resource = FoodResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
