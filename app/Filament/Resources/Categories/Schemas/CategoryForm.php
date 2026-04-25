<?php

namespace App\Filament\Resources\Categories\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class CategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
               Section::make([
                TextInput::make('title')
                    ->required(),
                TextInput::make('slug')
                    ->required(),
               ])->columns(2)->columnSpanFull()->label('Category Information'),

               Section::make([
                
                TextInput::make('meta_title')
                    ->default(null),
                Textarea::make('meta_keywords')
                    ->default(null)
                    ->columnSpanFull(),
                Textarea::make('meta_description')
                    ->default(null)
                    ->columnSpanFull(),
               ])->columns(2)->columnSpanFull()->label('Meta Information'),
            ]);
    }
}
