<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class Artical extends ChartWidget
{
    protected ?string $heading = 'Artical';

    protected function getData(): array
    {
        return [
        'datasets' => [
            [
                'label' => 'Blog posts created',
                'data' => [0, 10, 5, 2, 21, 32, 45, 74, 65, 45, 77, 89],
                'backgroundColor' => '#3b82f6', // Optional: Adds a nice Blue color
                'borderColor' => '#3b82f6',
            ],
        ],
        'labels' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
    ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
