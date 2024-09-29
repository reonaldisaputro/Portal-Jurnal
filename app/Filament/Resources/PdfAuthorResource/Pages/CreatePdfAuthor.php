<?php

namespace App\Filament\Resources\PdfAuthorResource\Pages;

use App\Filament\Resources\PdfAuthorResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePdfAuthor extends CreateRecord
{
    protected static string $resource = PdfAuthorResource::class;
}
