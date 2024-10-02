<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DmasukResource\Pages;
use App\Filament\Resources\DmasukResource\RelationManagers;
use App\Models\Dmasuk;
use App\Models\Masuk;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DmasukResource extends Resource
{
    protected static ?string $model = Dmasuk::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('id_masuk')
                ->label('ID Masuk')
                ->required()
                ->maxLength(6),
                Forms\Components\TextInput::make('kode_masuk')
                ->label('Kode Masuk')
                ->required()
                ->maxLength(6),
                Forms\Components\TextInput::make('kode_barang_beli')
                ->label('Kode Barang Beli')
                ->required()
                ->maxLength(6),
                Forms\Components\TextInput::make('jumlah')
                ->label('Jumlah')
                ->required(),
                Forms\Components\TextInput::make('subtotal')
                ->label('subtotal')
                ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id_masuk')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('kode_masuk')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('kode_barang_beli')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('jumlah')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('subtotal')->sortable()->searchable(),
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
            'index' => Pages\ListDmasuks::route('/'),
            'create' => Pages\CreateDmasuk::route('/create'),
            'edit' => Pages\EditDmasuk::route('/{record}/edit'),
        ];
    }
}
