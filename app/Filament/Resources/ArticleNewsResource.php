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

                auth()->user()->hasRole('super_admin') 
                ? Forms\Components\Select::make('author_id')
                    ->relationship('author', 'name')
                    ->required()
                    ->searchable()
                    ->preload() 
                : Forms\Components\Hidden::make('author_id')
                    ->default(fn() => auth()->check() ? auth()->user()->author_id : null),


                Forms\Components\Select::make('is_featured')
                    ->options([
                        'featured' => 'Featured',
                        'not_featured' => 'Not Featured',
                    ])
                    ->default(fn() => 'not_featured')
                    ->required()
                    ->disabled(fn() => !auth()->user()->hasRole('super_admin')),
                    
                Forms\Components\FileUpload::make('pdf_file')
                    ->label('Upload PDF File')
                    ->acceptedFileTypes(['application/pdf'])
                    ->directory('article/pdf')
                    ->maxSize(10240) // Maksimal 10MB (opsional)
                    ->required(),
                


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
                    ->visible(fn() => auth()->check() && auth()->user()->hasRole('super_admin')),
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
                // Tables\Columns\TextColumn::make('link_pdf')
                //     ->label('Link PDF'),
                Tables\Columns\TextColumn::make('pdf_file')
                    ->label('PDF File')
                    ->url(fn($record) => $record->pdf_file ? asset('storage/' . $record->pdf_file) : null, true) // URL untuk unduh
                    ->openUrlInNewTab()
                    ->formatStateUsing(fn($state) => basename($state)),
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

    public static function getEloquentQuery(): Builder
    {
        if (auth()->check() && auth()->user()->hasRole('super_admin')) {
            return parent::getEloquentQuery();
        }

        if (auth()->check() && !empty(auth()->user()->author_id)) {
            return parent::getEloquentQuery()->where('author_id', auth()->user()->author_id);
        }

        // Default: Jika tidak memenuhi syarat, kembalikan query kosong
        return parent::getEloquentQuery()->whereRaw('1 = 0');
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
