<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Author;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\AuthorResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\AuthorResource\RelationManagers;

class AuthorResource extends Resource
{
    protected static ?string $model = Author::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->label('Email')
                    ->required()
                    ->email()
                    ->unique(ignorable: fn($record) => $record)
                    ->visibleOn('create'),
                Forms\Components\TextInput::make('password')
                    ->label('Password')
                    ->required()
                    ->password()
                    ->visibleOn('create'),
                Select::make('status')
                    ->label('Status')
                    ->options([
                        'pending' => 'Pending',
                        'accept' => 'Accept',
                        'reject' => 'Reject',
                    ])
                    ->default('pending')
                    ->visible(fn() => auth()->check() && auth()->user()->hasRole('super_admin')),
                Forms\Components\TextInput::make('angkatan')
                    ->maxLength(255),
                Forms\Components\TextInput::make('jurusan')
                    ->maxLength(255),

                Forms\Components\TextInput::make('occupation')
                    ->required()
                    ->maxLength(255),

                Forms\Components\FileUpload::make('avatar')
                    ->label('Avatar')
                    ->disk('public')
                    ->image()
                    ->directory('author_avatar'),
                Forms\Components\TextInput::make('instagram')
                    ->activeUrl()
                    ->maxLength(255),
                Forms\Components\TextInput::make('facebook')
                    ->activeUrl()
                    ->maxLength(255),
                Forms\Components\TextInput::make('tiktok')
                    ->activeUrl()
                    ->maxLength(255),
                Forms\Components\TextInput::make('youtube')
                    ->activeUrl()
                    ->maxLength(255),
                Forms\Components\TextInput::make('linkedin')
                    ->activeUrl()
                    ->maxLength(255),
                Forms\Components\TextInput::make('twitter')
                    ->activeUrl()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\ImageColumn::make('avatar'),
                Tables\Columns\TextColumn::make('email'),
                Tables\Columns\TextColumn::make('status')
                    ->label('Status')->visible(fn() => auth()->check() && auth()->user()->hasRole('super_admin')),
                Tables\Columns\TextColumn::make('angkatan'),
                Tables\Columns\TextColumn::make('jurusan'),
                Tables\Columns\TextColumn::make('instagram'),
                Tables\Columns\TextColumn::make('facebook'),
                Tables\Columns\TextColumn::make('tiktok'),
                Tables\Columns\TextColumn::make('youtube'),
                Tables\Columns\TextColumn::make('linkedin'),
                Tables\Columns\TextColumn::make('twitter'),
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
            'index' => Pages\ListAuthors::route('/'),
            'create' => Pages\CreateAuthor::route('/create'),
            'edit' => Pages\EditAuthor::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        // Jika user adalah super_admin, tampilkan semua data tanpa filter
        if (auth()->check() && auth()->user()->hasRole('super_admin')) {
            return parent::getEloquentQuery();
        }

        // Jika bukan super_admin, tampilkan hanya data author yang sesuai dengan user yang login
        return parent::getEloquentQuery()->where('id', auth()->user()->author_id);
    }
}
