<?php

namespace App\Filament\Resources\TenantRefundResource\Pages;

use App\Filament\Resources\TenantRefundResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTenantRefunds extends ListRecords
{
    protected static string $resource = TenantRefundResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
