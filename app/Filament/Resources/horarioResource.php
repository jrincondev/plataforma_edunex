<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HorarioResource\Pages;
use App\Filament\Resources\HorarioResource\RelationManagers;
use App\Models\Horario;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TimePicker;


class HorarioResource extends Resource
{
    protected static ?string $model = Horario::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
{
    return $form->schema([
        Select::make('dia')
            ->label('Día de la semana')
            ->options([
                'Lunes' => 'Lunes',
                'Martes' => 'Martes',
                'Miércoles' => 'Miércoles',
                'Jueves' => 'Jueves',
                'Viernes' => 'Viernes',
                'Sábado' => 'Sábado',
                'Domingo' => 'Domingo',
            ])
            ->required(),

        TimePicker::make('hora_inicio')
            ->label('Hora de inicio')
            ->required(),

        TimePicker::make('hora_fin')
            ->label('Hora de fin')
            ->required(),

        TextInput::make('actividad')
            ->label('Actividad')
            ->required(),

        Select::make('usuario_id')
            ->label('Usuario')
            ->relationship('usuario', 'name') // Asegúrate de que el modelo User tiene "name"
            ->searchable()
            ->preload()
            ->nullable(),
    ]);
}

    public static function table(Table $table): Table
{
    return $table->columns([
        TextColumn::make('dia')->label('Día'),
        TextColumn::make('hora_inicio')->label('Inicio'),
        TextColumn::make('hora_fin')->label('Fin'),
        TextColumn::make('actividad')->label('Actividad'),
        TextColumn::make('usuario.name')->label('Usuario')->sortable()->searchable(),
    ])->filters([
        //
    ]);
}

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListHorarios::route('/'),
            'create' => Pages\CreateHorario::route('/create'),
            'edit' => Pages\EditHorario::route('/{record}/edit'),
        ];
    }
}
