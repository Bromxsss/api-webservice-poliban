<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LoansTableResource\Pages;
use App\Filament\Resources\LoansTableResource\RelationManagers;
use App\Models\LoansTable;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LoansTableResource extends Resource
{
    protected static ?string $model = LoansTable::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListLoansTables::route('/'),
            'create' => Pages\CreateLoansTable::route('/create'),
            'edit' => Pages\EditLoansTable::route('/{record}/edit'),
        ];
    }
}
