<?php

namespace App\Filament\Resources\Articals;

use App\Filament\Resources\Articals\Pages\CreateArtical;
use App\Filament\Resources\Articals\Pages\EditArtical;
use App\Filament\Resources\Articals\Pages\ListArticals;
use App\Filament\Resources\Articals\Schemas\ArticalForm;
use App\Filament\Resources\Articals\Tables\ArticalsTable;
use App\Models\Artical;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ArticalResource extends Resource
{
    protected static ?string $model = Artical::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'title';

     protected static ?int $navigationSort = 2;
    public static function form(Schema $schema): Schema
    {
        return ArticalForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ArticalsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListArticals::route('/'),
            'create' => CreateArtical::route('/create'),
            'edit' => EditArtical::route('/{record}/edit'),
        ];
    }
}
