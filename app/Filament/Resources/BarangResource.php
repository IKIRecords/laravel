<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BarangResource\Pages;
use App\Filament\Resources\BarangResource\RelationManagers;
use App\Models\Barang;
use App\Models\Category;
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
use Filament\Forms\Components\Select;





class BarangResource extends Resource
{
    protected static ?string $model = Barang::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('nama')
                ->required()
                ->label('Nama Barang'),
            TextInput::make('stok')
                ->required()
                ->numeric()
                ->label('Jumlah Stok'),
            TextInput::make('harga')
                ->numeric()
                ->required()
                ->label('Harga'),
                Select::make('category_id')  // Dropdown untuk memilih kategori
                ->label('Category')
                ->options(Category::all()->pluck('nama', 'id')->toArray())
                ->required(),
        ]);
    }

    


public static function table(Table $table): Table
{
    return $table->columns([
        TextColumn::make('nama')->sortable()->label('Nama Barang'),
        TextColumn::make('stok')->sortable()->label('Stok'),
        TextColumn::make('harga')->money('IDR')->sortable()->label('Harga'),
        TextColumn::make('category.name')  // Akses relasi category dan tampilkan 'name'
                ->label('Kategori')
                ->sortable(),
    ]);
}




    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBarangs::route('/'),
            'create' => Pages\CreateBarang::route('/create'),
            'edit' => Pages\EditBarang::route('/{record}/edit'),
        ];
    }
    public static function getPluralLabel(): string
{
    return 'Barang'; // Nama menu di sidebar
}

public static function getNavigationLabel(): string
{
    return 'Barang'; // Nama menu di sidebar
}

}
