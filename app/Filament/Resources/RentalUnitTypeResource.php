<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RentalUnitTypeResource\Pages;
use App\Filament\Resources\RentalUnitTypeResource\RelationManagers;
use App\Models\RentalUnitType;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RentalUnitTypeResource extends Resource
{
    protected static ?string $model = RentalUnitType::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
            'index' => Pages\ListRentalUnitTypes::route('/'),
            'create' => Pages\CreateRentalUnitType::route('/create'),
            'edit' => Pages\EditRentalUnitType::route('/{record}/edit'),
        ];
    }
}
