<?php

namespace App\Filament\Resources\StockManagementResource\Pages;

use App\Filament\Resources\StockManagementResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListStockManagement extends ListRecords
{
    protected static string $resource = StockManagementResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
