<?php

namespace App\Filament\Resources\RoleResource\Pages;

use App\Filament\Resources\RoleResource;
use Filament\Resources\Pages\ListRecords;

class ListRoles extends ListRecords
{
    protected static string $resource = RoleResource::class;

    protected function getFooterWidgets(): array
    {
        return [
            RoleResource\Widgets\PermissionWidget::class,
        ];
    }
}
