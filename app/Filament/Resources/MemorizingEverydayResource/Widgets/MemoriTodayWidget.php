<?php

namespace App\Filament\Resources\MemorizingEverydayResource\Widgets;

use Filament\Widgets\Widget;

class MemoriTodayWidget extends Widget
{
    protected static string $view = 'filament.widgets.memori-today';

    protected int | string | array $columnSpan = 'full';
}
