<?php

namespace App\Filament\Resources\RegistryResource\Pages;

use App\Filament\Resources\RegistryResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageRegistries extends ManageRecords
{
    protected static string $resource = RegistryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            //
        ];
    }
}
