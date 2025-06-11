<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProvinciesResource\Pages;
use App\Filament\Resources\ProvinciesResource\RelationManagers;
use App\Models\Provincy;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProvinciesResource extends Resource
{
    protected static ?string $model = Provincy::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextColumn::make('name')
                    ->searchable(),
                TextColumn::make('alt_name')
                    ->searchable(),
                TextColumn::make('latitude')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('longitude')
                    ->numeric()
                    ->sortable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable(),
                TextColumn::make('alt_name')
                    ->searchable(),
                TextColumn::make('latitude')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('longitude')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListProvincies::route('/'),
            'create' => Pages\CreateProvincies::route('/create'),
            'edit' => Pages\EditProvincies::route('/{record}/edit'),
        ];
    }
}
