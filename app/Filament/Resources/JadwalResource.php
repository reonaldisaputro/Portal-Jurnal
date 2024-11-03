<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Jadwal;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ColorColumn;
use Filament\Forms\Components\TimePicker;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\ColorPicker;
use Filament\Tables\Columns\BooleanColumn;
use App\Filament\Resources\JadwalResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\JadwalResource\RelationManagers;

class JadwalResource extends Resource
{
    protected static ?string $model = Jadwal::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('day_id')
                    ->relationship('day', 'name')
                    ->required()
                    ->label('Hari'),

                Select::make('kelas_id')
                    ->relationship('kelas', 'name')
                    ->required()
                    ->label('Kelas'),

                Select::make('mata_kuliah_id')
                    ->relationship('mataKuliah', 'name')
                    ->required()
                    ->label('Mata Kuliah'),

                Select::make('dosen_id')
                    ->relationship('dosen', 'name')
                    ->required()
                    ->label('Dosen'),

                TextInput::make('ruang')
                    ->required()
                    ->label('Ruang'),

                TimePicker::make('jam_mulai')
                    ->required()
                    ->label('Jam Mulai'),

                TimePicker::make('jam_selesai')
                    ->required()
                    ->label('Jam Selesai'),

                TextInput::make('link_zoom')
                    ->label('Link Online')
                    ->url(),

                Toggle::make('is_online')
                    ->label('Online'),

                ColorPicker::make('color')
                    ->label('Color')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('day.name')
                    ->label('Hari')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('kelas.name')
                    ->label('Kelas')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('mataKuliah.name')
                    ->label('Mata Kuliah')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('dosen.name')
                    ->label('Dosen')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('ruang')
                    ->label('Ruang')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('link_zoom')
                    ->label('Link Online'),

                TextColumn::make('jam_mulai')
                    ->label('Jam Mulai')
                    ->sortable(),

                TextColumn::make('jam_selesai')
                    ->label('Jam Selesai')
                    ->sortable(),

                ColorColumn::make('color')
                    ->copyable()
                    ->copyMessage('Color code copied')
                    ->copyMessageDuration(1500),

                BooleanColumn::make('is_online')
                    ->label('Online'),
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
            'index' => Pages\ListJadwals::route('/'),
            'create' => Pages\CreateJadwal::route('/create'),
            'edit' => Pages\EditJadwal::route('/{record}/edit'),
        ];
    }
}
