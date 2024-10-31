<?php

namespace App\Filament\Resources\LoansTableResource\Pages;

use App\Filament\Resources\LoansTableResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLoansTables extends ListRecords
{
    protected static string $resource = LoansTableResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
