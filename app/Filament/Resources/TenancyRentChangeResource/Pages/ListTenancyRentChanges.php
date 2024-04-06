<?php

namespace App\Filament\Resources\TenancyRentChangeResource\Pages;

use App\Filament\Resources\TenancyRentChangeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTenancyRentChanges extends ListRecords
{
    protected static string $resource = TenancyRentChangeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
