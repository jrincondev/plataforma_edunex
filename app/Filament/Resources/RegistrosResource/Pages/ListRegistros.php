<?php

namespace App\Filament\Resources\RegistrosResource\Pages;

use App\Filament\Resources\RegistrosResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRegistros extends ListRecords
{
    protected static string $resource = RegistrosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
