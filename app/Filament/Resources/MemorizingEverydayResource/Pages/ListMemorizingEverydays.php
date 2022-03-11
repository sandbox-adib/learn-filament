<?php

namespace App\Filament\Resources\MemorizingEverydayResource\Pages;

use App\Filament\Resources\MemorizingEverydayResource;
use Filament\Resources\Pages\ListRecords;

class ListMemorizingEverydays extends ListRecords
{
    protected static string $resource = MemorizingEverydayResource::class;

    protected function getHeaderWidgets(): array
    {
        return [
            MemorizingEverydayResource\Widgets\MemoriTodayWidget::class,
        ];
    }
}
