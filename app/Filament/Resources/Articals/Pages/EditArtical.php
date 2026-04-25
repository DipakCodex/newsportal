<?php

namespace App\Filament\Resources\Articals\Pages;

use App\Filament\Resources\Articals\ArticalResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditArtical extends EditRecord
{
    protected static string $resource = ArticalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
