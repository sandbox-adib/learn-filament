<?php

namespace App\Filament\Resources\PicketNameResource\Pages;

use App\Filament\Resources\PicketNameResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePicketName extends CreateRecord
{
    protected static string $resource = PicketNameResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
