<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\Transportation;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\TransportationResource\Pages;
use App\Filament\Resources\TransportationResource\RelationManagers;

class TransportationResource extends Resource
{
    protected static ?string $model = Transportation::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('author_id')
                    ->relationship('author', 'name')
                    ->label('Author')
                    ->nullable()
                    ->searchable(),

                Select::make('day_id')
                    ->relationship('day', 'name')
                    ->label('Hari')
                    ->required()
                    ->searchable(),

                TimePicker::make('waktu_penjemputan')
                    ->label('Waktu Penjemputan')
                    ->required(),

                TextInput::make('lokasi')
                    ->label('Lokasi')
                    ->required(),

                TextInput::make('kendaraan')
                    ->label('Kendaraan')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('author.name')
                    ->label('Author')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('day.name')
                    ->label('Hari')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('waktu_penjemputan')
                    ->label('Waktu Penjemputan')
                    ->sortable(),

                TextColumn::make('lokasi')
                    ->label('Lokasi')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('kendaraan')
                    ->label('Kendaraan')
                    ->sortable()
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListTransportations::route('/'),
            'create' => Pages\CreateTransportation::route('/create'),
            'edit' => Pages\EditTransportation::route('/{record}/edit'),
        ];
    }
}
