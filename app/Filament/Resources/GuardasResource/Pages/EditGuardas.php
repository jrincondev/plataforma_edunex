<?php

namespace App\Filament\Resources\GuardasResource\Pages;

use App\Filament\Resources\GuardasResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGuardas extends EditRecord
{
    protected static string $resource = GuardasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
