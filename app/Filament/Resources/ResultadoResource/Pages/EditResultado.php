<?php

namespace App\Filament\Resources\ResultadoResource\Pages;

use App\Filament\Resources\ResultadoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditResultado extends EditRecord
{
    protected static string $resource = ResultadoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
