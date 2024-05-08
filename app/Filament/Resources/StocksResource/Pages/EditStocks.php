<?php

namespace App\Filament\Resources\StocksResource\Pages;

use App\Filament\Resources\StocksResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditStocks extends EditRecord
{
    protected static string $resource = StocksResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
