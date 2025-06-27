<?php

namespace App\Filament\Resources\ResultadoResource\Pages;

use App\Filament\Resources\ResultadoResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewResultado extends ViewRecord
{
    protected static string $resource = ResultadoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
