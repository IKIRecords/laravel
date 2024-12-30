<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PersonalProgrammerResource\Pages;
use App\Filament\Resources\PersonalProgrammerResource\RelationManagers;
use App\Models\PersonalProgrammer;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\NumberInput;
use Filament\Tables\Columns\TextColumn;

class PersonalProgrammerResource extends Resource
{
    protected static ?string $model = PersonalProgrammer::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
{
    return $form->schema([
        TextInput::make('nama')->required()->label('Nama'),
        TextInput::make('email')->email()->required()->label('Email'),
        TextInput::make('expertise')->required()->label('Keahlian'),
    ]);
}


public static function table(Table $table): Table
{
    return $table->columns([
        TextColumn::make('nama')->sortable()->label('Nama'),
        TextColumn::make('email')->sortable()->label('Email'),
        TextColumn::make('expertise')->sortable()->label('Keahlian'),
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
            'index' => Pages\ListPersonalProgrammers::route('/'),
            'create' => Pages\CreatePersonalProgrammer::route('/create'),
            'edit' => Pages\EditPersonalProgrammer::route('/{record}/edit'),
        ];
    }
}
