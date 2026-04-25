<?php

namespace App\Filament\Resources\Advertises\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class AdvertiseForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
               Section::make([
                TextInput::make('company_name')
                    ->required(),
                    Textarea::make('contact')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('redirect_link')
                    ->required(),
                DatePicker::make('expire_date')
                    ->required(),
                     FileUpload::make('banner')
                    ->required(),
               ])->columns(2)->columnSpanFull(),
            ]);
    }
}
