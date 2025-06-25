<?php

namespace App\Filament\Resources\RegistrosResource\Pages;

use App\Filament\Resources\RegistrosResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRegistros extends EditRecord
{
    protected static string $resource = RegistrosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
