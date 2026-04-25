<?php

namespace App\Filament\Widgets;

use App\Models\Advertise;
use App\Models\Artical;
use App\Models\Category;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
    Stat::make('Total Categories', Category::count())
        ->description('Content hierarchy')
        ->descriptionIcon('heroicon-m-rectangle-stack')
        ->color('info')
        ->icon('heroicon-o-folder'),

    Stat::make('Total Articles', Artical::count()) // Double check spelling of "Artical" vs "Article"
        ->description('New updates this month')
        ->descriptionIcon('heroicon-m-arrow-trending-up')
        ->chart([7, 3, 4, 5, 6, 3, 5, 8])
        ->color('success'),

    Stat::make('Total Advertisements', Advertise::count())
        ->description('Active ad campaigns')
        ->descriptionIcon('heroicon-m-megaphone')
        ->color('warning')
        ->icon('heroicon-o-presentation-chart-bar'),
];
    }
}
