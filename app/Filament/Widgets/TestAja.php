<?php

namespace App\Filament\Widgets;

use Filament\Tables;
use Filament\Widgets\Widget;
use Illuminate\Database\Eloquent\Builder;
use App\Models\{
    Santri,
    User,
};
use Tables\Columns\{
    TextColumn
};

class TestAja extends Widget implements Tables\Contracts\HasTable
{
    use Tables\Concerns\InteractsWithTable;

    protected static string $view = 'filament.widgets.test-aja';

    protected int | string | array $columnSpan = 'full';

    protected function getTableQuery(): Builder
    {
        return Santri::latest()->take(10);
    }

    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('name'),
            Tables\Columns\TextColumn::make('created_at')
                                        ->dateTime("d/m/Y"),
        ];
    }
}
