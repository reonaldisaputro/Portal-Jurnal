<?php

namespace App\Filament\Resources\PdfAuthorResource\Pages;

use App\Filament\Resources\PdfAuthorResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPdfAuthors extends ListRecords
{
    protected static string $resource = PdfAuthorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
