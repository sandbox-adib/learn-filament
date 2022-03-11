<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MemorizingEverydayResource\Pages;
use App\Filament\Resources\MemorizingEverydayResource\RelationManagers;
use App\Filament\Resources\MemorizingEverydayResource\Widgets\MemoriTodayWidget;
use App\Models\MemorizingEveryday;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Forms\Components\{
    BelongsToSelect,
    TextInput,
};
use Filament\Widgets\Widget;

// Bikin widget memori yang munculin catatan ketambah hari ini

class MemorizingEverydayResource extends Resource
{
    protected static ?string $model = MemorizingEveryday::class;

    protected static ?string $navigationIcon = 'heroicon-o-book-open';

    protected static ?string $navigationGroup = 'Menu custom';

    protected $widget = [
        MemoriTodayWidget::class,
    ];


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                BelongsToSelect::make('user_id')
                    ->relationship('user', 'name')
                    ->required(),
                TextInput::make('memorize')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')
                                            ->label('Name'),
                Tables\Columns\TextColumn::make('memorize'),
                Tables\Columns\TextColumn::make('created_at')
                                            ->dateTime('d/m/Y H:i')
                                            ->label('Notes')
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
            'index' => Pages\ListMemorizingEverydays::route('/'),
            'create' => Pages\CreateMemorizingEveryday::route('/create'),
            'edit' => Pages\EditMemorizingEveryday::route('/{record}/edit'),
        ];
    }

    public static function getWidgets(): array
    {
        return [
            Widget\MemoriTodayWidget::class,
        ];
    }
}
