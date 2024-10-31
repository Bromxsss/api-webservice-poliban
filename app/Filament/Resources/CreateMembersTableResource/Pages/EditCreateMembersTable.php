<?php

namespace App\Filament\Resources\CreateMembersTableResource\Pages;

use App\Filament\Resources\CreateMembersTableResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCreateMembersTable extends EditRecord
{
    protected static string $resource = CreateMembersTableResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
