<?php

namespace App\Filament\Resources\Articals\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ArticalForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('categories')
                    ->relationship('categories', 'title')
                    ->multiple()
                    ->searchable()
                    ->preload()
                    ->required(),
               Section::make([
                 TextInput::make('title')
                    ->required(),
                TextInput::make('slug')
                    ->required(),
                TextInput::make('author')
                    ->required(),
                RichEditor::make('description')
                    ->required(),
                FileUpload::make('image')
                    ->image()
                    ->required(),
               ])->columns(2)->columnSpanFull()->label('Artical Details'),

            Section::make([

                Textarea::make('meta_title')
                    ->default(null),
                     Toggle::make('status')
                    ->required(),
                Textarea::make('meta_keywords')
                    ->default(null)
                    ->columnSpanFull(),
                Textarea::make('meta_description')
                    ->default(null)
                    ->columnSpanFull(),
            ])->columns(2)->columnSpanFull()->label('Meta Data'),

            ]);
    }
}
