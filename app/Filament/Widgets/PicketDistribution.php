<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;

class PicketDistribution extends Widget
{
    protected static string $view = 'filament.widgets.picket-distribution';

    protected int | string | array $columnSpan = 'full';
}
