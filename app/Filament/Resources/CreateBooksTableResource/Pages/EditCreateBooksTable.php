<?php

namespace App\Filament\Resources\CreateBooksTableResource\Pages;

use App\Filament\Resources\CreateBooksTableResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCreateBooksTable extends EditRecord
{
    protected static string $resource = CreateBooksTableResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
