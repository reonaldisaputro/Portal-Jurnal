<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PdfAuthorResource\Pages;
use App\Filament\Resources\PdfAuthorResource\RelationManagers;
use App\Models\PdfAuthor;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PdfAuthorResource extends Resource
{
    protected static ?string $model = PdfAuthor::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Forms\Components\Select::make('category_id')
                //     ->relationship('category', 'name')
                //     ->searchable()
                //     ->preload()
                //     ->required(),
                // Forms\Components\TextInput::make('link_pdf')
                //     ->activeUrl()
                //     ->label('Link PDF')
                //     ->required()
                //     ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('link_pdf')
                    ->label('Link PDF'),
                Tables\Columns\TextColumn::make('category.name')
                    ->label('Category'),
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
            'index' => Pages\ListPdfAuthors::route('/'),
            'create' => Pages\CreatePdfAuthor::route('/create'),
            'edit' => Pages\EditPdfAuthor::route('/{record}/edit'),
        ];
    }
}
