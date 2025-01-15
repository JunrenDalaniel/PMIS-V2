<?php

namespace App\Filament\Resources\RODbranchResource\Pages;

use App\Filament\Resources\RODbranchResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRODbranch extends EditRecord
{
    protected static string $resource = RODbranchResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
