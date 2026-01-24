<?php

namespace App\Filament\Resources\MarkdownResource\Pages;

use App\Filament\Resources\MarkdownResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateMarkdown extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            // ...
        ];
    }
    protected static string $resource = MarkdownResource::class;
}
