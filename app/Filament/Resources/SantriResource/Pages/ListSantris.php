<?php

namespace App\Filament\Resources\SantriResource\Pages;

use App\Filament\Resources\SantriResource;
use Filament\Resources\Pages\ListRecords;
use Filament\Pages\Actions\{
    ButtonAction
};

class ListSantris extends ListRecords
{
    protected static string $resource = SantriResource::class;

    protected function getActions(): array
    {
        return [
            ButtonAction::make('Graduate')
                            ->color('success')
                            ->icon('heroicon-o-academic-cap')
                            ->url(route('filament.resources.santris.custom-page')),
                            ButtonAction::make('New Santri')
                            ->color('warning')
                            ->icon('heroicon-o-plus-circle')
                            ->url(route('filament.resources.santris.create'))
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [
            SantriResource\Widgets\SantriWidget::class,
        ];
    }
}
