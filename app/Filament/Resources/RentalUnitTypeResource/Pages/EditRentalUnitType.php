<?php

namespace App\Filament\Resources\RentalUnitTypeResource\Pages;

use App\Filament\Resources\RentalUnitTypeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRentalUnitType extends EditRecord
{
    protected static string $resource = RentalUnitTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
