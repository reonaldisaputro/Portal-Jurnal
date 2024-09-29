<?php

namespace App\Filament\Resources\PdfAuthorResource\Pages;

use App\Filament\Resources\PdfAuthorResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPdfAuthor extends EditRecord
{
    protected static string $resource = PdfAuthorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
