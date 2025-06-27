<?php

namespace App\Filament\Resources\ResultadoResource\Pages;

use App\Filament\Resources\ResultadoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListResultados extends ListRecords
{
    protected static string $resource = ResultadoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
