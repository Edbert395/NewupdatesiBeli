<?php

namespace App\Filament\Resources\DmasukResource\Pages;

use App\Filament\Resources\DmasukResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDmasuks extends ListRecords
{
    protected static string $resource = DmasukResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
