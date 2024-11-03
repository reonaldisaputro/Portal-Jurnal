<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\MataKuliah;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ColorColumn;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\ColorPicker;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\MataKuliahResource\Pages;
use App\Filament\Resources\MataKuliahResource\RelationManagers;

class MataKuliahResource extends Resource
{
    protected static ?string $model = MataKuliah::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label('Nama')
                    ->required(),
                TextInput::make('category')
                    ->label('Kategori')
                    ->required(),
                ColorPicker::make('color')
                    ->label('Color')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Nama')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('category')
                    ->label('Kategori')
                    ->sortable()
                    ->searchable(),
                ColorColumn::make('color')
                    ->copyable()
                    ->copyMessage('Color code copied')
                    ->copyMessageDuration(1500),
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
            'index' => Pages\ListMataKuliahs::route('/'),
            'create' => Pages\CreateMataKuliah::route('/create'),
            'edit' => Pages\EditMataKuliah::route('/{record}/edit'),
        ];
    }
}
