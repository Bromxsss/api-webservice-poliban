<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CreateBooksTableResource\Pages;
use App\Filament\Resources\CreateBooksTableResource\RelationManagers;
use App\Models\CreateBooksTable;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\DateColumn;
use Filament\Tables\Columns\DateTimeColumn; // Menggunakan DateTimeColumn

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CreateBooksTableResource extends Resource
{
    protected static ?string $model = CreateBooksTable::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Forms\Components\TextInput::make('title')
                ->label('Judul Buku')
                ->required()
                ->maxLength(255),

            Forms\Components\TextInput::make('author')
                ->label('Nama Pengarang')
                ->required()
                ->maxLength(255),

            Forms\Components\DatePicker::make('published_date')
                ->label('Tanggal Terbit')
                ->required(),

            Forms\Components\TextInput::make('stock')
                ->label('Stok')
                ->required()
                ->numeric()
                ->default(0),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('title')
                ->label('Judul Buku')
                ->sortable()
                ->searchable(),

            TextColumn::make('author')
                ->label('Nama Pengarang')
                ->sortable()
                ->searchable(),

            TextColumn::make('published_date') // Gunakan TextColumn untuk tanggal
                ->label('Tanggal Terbit')
                ->sortable()
                ->dateTime(), // Memformatnya sebagai tanggal dan waktu

            TextColumn::make('stock')
                ->label('Stok')
                ->sortable(),

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
            'index' => Pages\ListCreateBooksTables::route('/'),
            'create' => Pages\CreateCreateBooksTable::route('/create'),
            'edit' => Pages\EditCreateBooksTable::route('/{record}/edit'),
        ];
    }
}
