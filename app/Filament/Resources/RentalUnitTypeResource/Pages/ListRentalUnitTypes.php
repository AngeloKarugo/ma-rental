<?php

namespace App\Filament\Resources\RentalUnitTypeResource\Pages;

use App\Filament\Resources\RentalUnitTypeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRentalUnitTypes extends ListRecords
{
    protected static string $resource = RentalUnitTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
