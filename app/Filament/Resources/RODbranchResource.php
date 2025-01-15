<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RODbranchResource\Pages;
use App\Filament\Resources\RODbranchResource\RelationManagers;
use App\Models\RODbranch;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RODbranchResource extends Resource
{
    protected static ?string $model = RODbranch::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('ROD_SERIES')
                    ->label('Series')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('ROD_BRANCHNAME')
                    ->label('ROD Branch')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('ROD_ADDRESS')
                    ->label('ROD Address')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('ROD_STATUS')
                    ->label('Status')
                    ->options([
                        'ACTIVE' => 'ACTIVE',
                        'INACTIVE' => 'INACTIVE',
                    ])
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('ROD_SERIES')
                    ->label('Series')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ROD_BRANCHNAME')
                    ->label('ROD Branch')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ROD_ADDRESS')
                ->label('ROD Address')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ROD_STATUS')
                ->label('Status')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
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
            'index' => Pages\ListRODbranches::route('/'),
            'create' => Pages\CreateRODbranch::route('/create'),
            'edit' => Pages\EditRODbranch::route('/{record}/edit'),
        ];
    }
}
