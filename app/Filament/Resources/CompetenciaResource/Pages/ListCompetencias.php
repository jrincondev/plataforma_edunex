<?php

namespace App\Filament\Resources\CompetenciaResource\Pages;

use App\Filament\Resources\CompetenciaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCompetencias extends ListRecords
{
    protected static string $resource = CompetenciaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
