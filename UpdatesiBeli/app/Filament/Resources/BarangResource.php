<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BarangResource\Pages;
use App\Filament\Resources\BarangResource\RelationManagers;
use App\Models\Barang;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BarangResource extends Resource
{
    protected static ?string $model = Barang::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('kode_barang')
                ->label('Kode Barang')
                ->required()
                ->maxLength(6),
                Forms\Components\TextInput::make('harga_jual')
                ->label('Harga Jual')
                ->required()
                ->maxLength(16),
                Forms\Components\TextInput::make('harga_beli')
                ->label('Harga Beli')
                ->required()
                ->maxLength(16),
                Forms\Components\TextInput::make('stok')
                ->label('Stok')
                ->required(),
                Forms\Components\Select::make('status')
                ->options([
                'Tersedia' => 'Tersedia',
                'Tidak Tersedia' => 'Tidak Tersedia',
                ])
                ->searchable()
                ->native(false),
                Forms\Components\TextInput::make('satuan')
                ->label('Satuan')
                ->required(),
                Forms\Components\TextInput::make('nama_barang')
                ->label('Nama Barang')
                ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kode_barang')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('harga_jual')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('harga_beli')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('stok')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('status')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('satuan')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('nama_barang')->sortable()->searchable(),
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
            'index' => Pages\ListBarangs::route('/'),
            'create' => Pages\CreateBarang::route('/create'),
            'edit' => Pages\EditBarang::route('/{record}/edit'),
        ];
    }
}
