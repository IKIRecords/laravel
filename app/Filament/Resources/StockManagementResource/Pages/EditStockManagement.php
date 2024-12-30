<?php

namespace App\Filament\Resources\StockManagementResource\Pages;

use App\Filament\Resources\StockManagementResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditStockManagement extends EditRecord
{
    protected static string $resource = StockManagementResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
