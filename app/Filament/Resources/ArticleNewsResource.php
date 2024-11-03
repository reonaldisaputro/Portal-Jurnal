<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\ArticleNews;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ArticleNewsResource\Pages;
use App\Filament\Resources\ArticleNewsResource\RelationManagers;

class ArticleNewsResource extends Resource
{
    protected static ?string $model = ArticleNews::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),

                Forms\Components\TextInput::make('slug')
                    ->disabled(),

                Forms\Components\FileUpload::make('thumbnail'),

                Forms\Components\Select::make('category_id')
                    ->relationship('category', 'name')
                    ->searchable()
                    ->preload()
                    ->required(),

                Forms\Components\Select::make('author_id')
                    ->relationship('author', 'name') // Menggunakan relasi ke 'author' yang didefinisikan di model User
                    ->default(fn() => auth()->user()->author_id) // Mengambil nilai author_id dari user yang login
                    ->disabled(fn() => auth()->user()->hasRole('author')) // Nonaktifkan untuk role author jika diperlukan
                    ->searchable()
                    ->preload()
                    ->required(),

                Forms\Components\Select::make('is_featured')
                    ->options([
                        'featured' => 'Featured',
                        'not_featured' => 'Not Featured',
                    ])
                    ->required()
                    ->visible(fn() => auth()->check() && auth()->user()->hasRole('admin')),
                Forms\Components\TextInput::make('link_pdf')
                    ->activeUrl()
                    ->label('Link PDF')
                    ->required()
                    ->maxLength(255),


                Forms\Components\RichEditor::make('content')
                    ->required()
                    ->columnSpanFull()
                    ->toolbarButtons([
                        'attachFiles',
                        'blockquote',
                        'bold',
                        'bulletList',
                        'codeBlock',
                        'h2',
                        'h3',
                        'italic',
                        'link',
                        'orederedList',
                        'redo',
                        'strike',
                        'underline',
                        'undo',
                    ]),
                Select::make('status')
                    ->label('Status')
                    ->options([
                        'pending' => 'Pending',
                        'accept' => 'Accepted',
                        'reject' => 'Rejected',
                    ])
                    ->default('pending')
                    ->required()
                    ->visible(fn() => auth()->check() && auth()->user()->hasRole('admin')),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),

                Tables\Columns\TextColumn::make('is_featured')
                    ->badge()
                    ->color(fn(string $state): string => match ($state) {
                        'featured' => 'success',
                        'not_featured' => 'danger',
                    }),

                Tables\Columns\TextColumn::make('category.name'),
                Tables\Columns\TextColumn::make('link_pdf')
                    ->label('Link PDF'),
                Tables\Columns\TextColumn::make('status')
                    ->label('Status')
                    ->formatStateUsing(function ($state) {
                        return match ($state) {
                            'pending' => 'Pending',
                            'accept' => 'Accepted',
                            'reject' => 'Rejected',
                            default => 'Unknown',
                        };
                    })
                    ->sortable(),

                Tables\Columns\ImageColumn::make('thumbnail'),
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
            'index' => Pages\ListArticleNews::route('/'),
            'create' => Pages\CreateArticleNews::route('/create'),
            'edit' => Pages\EditArticleNews::route('/{record}/edit'),
        ];
    }
}
