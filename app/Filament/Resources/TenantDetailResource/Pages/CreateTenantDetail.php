<?php

namespace App\Filament\Resources\TenantDetailResource\Pages;

use App\Filament\Resources\TenantDetailResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTenantDetail extends CreateRecord
{
    protected static string $resource = TenantDetailResource::class;
}
