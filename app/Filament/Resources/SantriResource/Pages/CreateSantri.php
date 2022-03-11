<?php

namespace App\Filament\Resources\SantriResource\Pages;

use App\Filament\Resources\SantriResource;
use Filament\Resources\Pages\CreateRecord;
use Filament\Pages\Actions\{
    ButtonAction
};


class CreateSantri extends CreateRecord
{
    protected static string $resource = SantriResource::class;

    protected static ?string $title = 'Create santri euy';
}
