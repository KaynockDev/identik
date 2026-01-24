<?php

namespace App\Filament\Resources\SmileResource\Pages;

use App\Filament\Resources\SmileResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSmile extends EditRecord
{
    protected static string $resource = SmileResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }



}
