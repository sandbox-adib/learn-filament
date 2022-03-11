<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PicketNameResource\Pages;
use App\Filament\Resources\PicketNameResource\RelationManagers;
use App\Models\PicketName;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Forms\Components\{
    TextInput,
    Card,
};
use Filament\Tables\Columns\{
    TextColumn,
};


class PicketNameResource extends Resource
{
    protected static ?string $model = PicketName::class;

    protected static ?string $navigationIcon = 'heroicon-o-trash';

    protected static ?string $navigationGroup = 'Menu custom';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                ->schema([
                    TextInput::make('name')
                                ->required(),
                    TextInput::make('min_member')
                                ->numeric()
                                ->required(),
                    TextInput::make('max_member')
                                ->numeric()
                                ->required(),
                ])
                ->columns(1)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),
                TextColumn::make('min_member')
                            ->label('min'),
                TextColumn::make('max_member')
                            ->label('max'),
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
            'index' => Pages\ListPicketNames::route('/'),
            'create' => Pages\CreatePicketName::route('/create'),
            'edit' => Pages\EditPicketName::route('/{record}/edit'),
        ];
    }
}
