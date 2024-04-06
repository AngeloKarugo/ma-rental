<?php

namespace App\Filament\Resources\TenancyResource\Pages;

use App\Filament\Resources\TenancyResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTenancy extends CreateRecord
{
    protected static string $resource = TenancyResource::class;
}
