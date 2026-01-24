<?php

namespace App\Filament\Resources\MarkdownResource\Pages;

use App\Filament\Resources\MarkdownResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMarkdowns extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = MarkdownResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\CreateAction::make(),
        ];
    }
}
