<?php

namespace App\Filament\Resources\RODbranchResource\Pages;

use App\Filament\Resources\RODbranchResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRODbranches extends ListRecords
{
    protected static string $resource = RODbranchResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
