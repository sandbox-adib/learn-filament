<?php

namespace App\Filament\Resources\SantriResource\Pages;

use App\Filament\Resources\SantriResource;
use Filament\Resources\Pages\Page;
use Filament\Resources\Table;
use Filament\Tables\Columns\{
    TextColumn,
    BooleanColumn,
};
use Filament\Pages\Actions\{
    ButtonAction
};

class CustomPage extends Page
{
    protected static string $resource = SantriResource::class;

    protected static string $view = 'filament.resources.santri-resource.pages.custom-page';

    protected static ?string $title = 'Santri lulus';
 
    protected function getActions(): array
    {
        return [
            ButtonAction::make('Add Graduate')
                            ->color('success')
                            ->icon('heroicon-o-academic-cap'),
        ];
    }

}
