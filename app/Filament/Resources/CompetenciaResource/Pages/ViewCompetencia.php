<?php

namespace App\Filament\Resources\CompetenciaResource\Pages;

use App\Filament\Resources\CompetenciaResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewCompetencia extends ViewRecord
{
    protected static string $resource = CompetenciaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
