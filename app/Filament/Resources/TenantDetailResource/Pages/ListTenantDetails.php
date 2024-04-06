<?php

namespace App\Filament\Resources\TenantDetailResource\Pages;

use App\Filament\Resources\TenantDetailResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTenantDetails extends ListRecords
{
    protected static string $resource = TenantDetailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
