<?php

namespace App\Filament\Resources\DmasukResource\Pages;

use App\Filament\Resources\DmasukResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDmasuk extends EditRecord
{
    protected static string $resource = DmasukResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
