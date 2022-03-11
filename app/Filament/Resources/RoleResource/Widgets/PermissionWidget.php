<?php

namespace App\Filament\Resources\RoleResource\Widgets;

use Filament\Widgets\Widget;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Tables\Columns\{
    TextColumn
};
use Spatie\Permission\Models\Permission;

class PermissionWidget extends Widget  implements Tables\Contracts\HasTable
{
    use Tables\Concerns\InteractsWithTable;

    protected static string $view = 'filament.resources.role-resource.widgets.permission';

    protected int | string | array $columnSpan = 'full';

    protected function getTableQuery(): Builder
    {
        // dd(Permission::get());
        return Permission::latest()->take(10);
    }

    protected function getTableColumns(): array
    {
        // dd($this);
        return [
            Tables\Columns\TextColumn::make('name'),
            Tables\Columns\TextColumn::make('guard_name')
                            ->label('Guard'),
            Tables\Columns\TextColumn::make('created_at')
                                        ->dateTime("d/m/Y"),
        ];
    }
}
