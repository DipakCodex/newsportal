<?php

namespace App\Filament\Resources\Articals\Pages;

use App\Filament\Resources\Articals\ArticalResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListArticals extends ListRecords
{
    protected static string $resource = ArticalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
