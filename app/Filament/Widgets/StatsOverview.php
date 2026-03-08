<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Pool;
use App\Models\ContactUs;

class StatsOverview extends StatsOverviewWidget
{
    protected function getColumns(): int
    {
        return 2;
    }

    protected function getStats(): array
    {
        return [
            Stat::make('Total Pools', Pool::where('category', 'pool')->count())
                ->description('All registered swimming pools')
              
                ->color('info'),
            Stat::make('Total Ponds', Pool::where('category', 'pond')->count())
    ->description('All registered ponds')
   
    ->color('success'),

Stat::make('Total Cement', Pool::where('category', 'cement')->count())
    ->description('All registered cement pools')
   
    ->color('danger'),
            Stat::make('Total Inquiries', ContactUs::count())
                ->description('Total messages received')
                ->descriptionIcon('heroicon-m-envelope')
                ->color('warning'),
        ];
    }
}
