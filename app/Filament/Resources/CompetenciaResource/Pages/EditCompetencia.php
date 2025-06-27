<?php

namespace App\Filament\Resources\CompetenciaResource\Pages;

use App\Filament\Resources\CompetenciaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCompetencia extends EditRecord
{
    protected static string $resource = CompetenciaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
