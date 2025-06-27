<?php

namespace App\Filament\Resources\InstructoresResource\Pages;

use App\Filament\Resources\InstructoresResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewInstructores extends ViewRecord
{
    protected static string $resource = InstructoresResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
