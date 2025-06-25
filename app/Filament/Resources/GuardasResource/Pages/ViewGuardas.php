<?php

namespace App\Filament\Resources\GuardasResource\Pages;

use App\Filament\Resources\GuardasResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewGuardas extends ViewRecord
{
    protected static string $resource = GuardasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
