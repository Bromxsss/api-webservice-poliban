<?php

namespace App\Filament\Resources\CreateMembersTableResource\Pages;

use App\Filament\Resources\CreateMembersTableResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCreateMembersTables extends ListRecords
{
    protected static string $resource = CreateMembersTableResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
