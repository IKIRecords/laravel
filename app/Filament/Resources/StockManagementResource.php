<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StockManagementResource\Pages;
use App\Models\StockManagement;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Form;


class StockManagementResource extends Resource
{
    protected static ?string $model = StockManagement::class;

    protected static ?string $navigationIcon = 'heroicon-o-cube';

    protected static ?string $navigationGroup = 'Inventory';

    /**
     * Define the form schema.
     */
    public static function form(Form $form): Form
    {
        return $form->schema([
            // Dropdown untuk memilih barang
            Select::make('product_id')  // Sesuaikan dengan nama kolom yang ada
                ->relationship('barang', 'nama')  // Menampilkan nama Barang yang terhubung
                ->required()
                ->label('Barang'),
    
            // Dropdown untuk memilih tipe produk (Makanan atau Minuman)
            Select::make('category_id')
                ->options([
                    'Makanan' => 'Makanan',  // Opsi Makanan
                    'Minuman' => 'Minuman',  // Opsi Minuman
                ])
                ->required()
                ->label('Tipe Produk'),
    
            // Dropdown untuk memilih manajemen barang (Masuk atau Keluar)
            Select::make('manajemen')  // Kolom untuk manajemen
                ->options([
                    'Masuk' => 'Barang Masuk',  // Opsi Barang Masuk
                    'Keluar' => 'Barang Keluar',  // Opsi Barang Keluar
                ])
                ->required()
                ->label('Manajemen'),
    
            // Input jumlah
            TextInput::make('jumlah_stok')
                ->numeric()
                ->required()
                ->label('Jumlah'),
    
            // Pilih tanggal
            DatePicker::make('date')
                ->required()
                ->label('Tanggal'),
        ]);
    }

    /**
     * Define the table schema.
     */
    public static function table(Tables\Table $table): Tables\Table
    {
        return $table->columns([
            // Menampilkan nama Barang yang terhubung
            TextColumn::make('barang.nama')  // Menampilkan nama Barang yang terhubung
                ->label('Barang')
                ->sortable()
                ->searchable(),

            // Menampilkan tipe transaksi
            TextColumn::make('manajemen')
                ->label('Type')
                ->sortable(),

            // Menampilkan jumlah transaksi
            TextColumn::make('jumlah_stok')
                ->label('Quantity')
                ->sortable(),

        
            

            // Menampilkan kategori Barang yang terkait
            TextColumn::make('product_id')  // Akses relasi barang
                ->getStateUsing(fn ($record) => $record->barang?->category?->nama) // Mengambil 'name' dari category
                ->label('Kategori')
                ->sortable(),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListStockManagement::route('/'),
            'create' => Pages\CreateStockManagement::route('/create'),
            'edit' => Pages\EditStockManagement::route('/{record}/edit'),
        ];
    }
}
