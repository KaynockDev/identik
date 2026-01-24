<?php

namespace App\Filament\Resources\SmileResource\Pages;

use App\Filament\Resources\SmileResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateSmile extends CreateRecord
{

    protected function getHeaderActions(): array
    {
        return [
            // ...
        ];
    }
    protected static string $resource = SmileResource::class;
}
