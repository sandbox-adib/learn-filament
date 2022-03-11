<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SantriResource\Pages;
use App\Filament\Resources\SantriResource\RelationManagers;
use App\Filament\Resources\SantriResource\Widgets\SantriWidget;
use App\Models\Santri;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Resources\Form;
use Filament\Forms\Components\{
    TextInput,
    MarkdownEditor,
};
use Filament\Tables\Columns\{
    TextColumn,
    BooleanColumn,
};
use Filament\Pages\Actions\{
    ButtonAction
};
use Filament\Widgets\Widget;

class SantriResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationGroup = 'Menu custom';

    protected $widget = [
        SantriWidget::class,
    ];

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->required(),
                TextInput::make('address')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),
                TextColumn::make('address'),
            ])
            ->filters([
                //
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSantris::route('/'),
            'create' => Pages\CreateSantri::route('/create'),
            'edit' => Pages\EditSantri::route('/{record}/edit'),
            'custom-page' => Pages\CustomPage::route('/custom-page'),
        ];
    }

    public static function getGloballySearchableAttributes(): array
    {
        return ['name', 'address'];
    }

    public static function getWidgets(): array
    {
        return [
            Widget\SantriWidget::class
        ];
    }

    // public static function getGlobalSearchResultDetails(Model $record): array
    // {
    //     return [
    //         'Brand' => optional($record),
    //     ];
    // }

    // protected static function getGlobalSearchEloquentQuery(): Builder
    // {
    //     return parent::getGlobalSearchEloquentQuery()->with(['']);
    // }
}
