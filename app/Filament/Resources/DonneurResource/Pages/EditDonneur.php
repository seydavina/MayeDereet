<?php

namespace App\Filament\Resources\DonneurResource\Pages;

use App\Filament\Resources\DonneurResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDonneur extends EditRecord
{
    protected static string $resource = DonneurResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
