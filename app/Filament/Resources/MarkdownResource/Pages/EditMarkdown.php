<?php

namespace App\Filament\Resources\MarkdownResource\Pages;

use App\Filament\Resources\MarkdownResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMarkdown extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = MarkdownResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            // Actions\DeleteAction::make(),
        ];
    }
}
