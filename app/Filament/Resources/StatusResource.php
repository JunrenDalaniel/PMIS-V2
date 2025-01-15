<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StatusResource\Pages;
use App\Models\Status;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class StatusResource extends Resource
{
    protected static ?string $model = Status::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    // Define the form schema
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('status_series')
                    ->label('Status Series')
                    ->required() // make this field required if needed
                    ->unique() // Ensures the series is unique
                    ->maxLength(255),  // Limit the string length
                Forms\Components\TextInput::make('status_name')
                    ->label('Status Name')
                    ->required(),
                    Forms\Components\Select::make('status_type')
                    ->label('Status Type')
                    ->options([
                        'on_process' => 'On Process',
                        'Deficiency' => 'Deficiency',
                        'Encumbered' => 'Encumbered',
                    ])
                    ->default('on_process')
                    ->required(),
                Forms\Components\Select::make('status_status')
                    ->label('Status Status')
                    ->options([
                        'active' => 'Active',
                        'inactive' => 'Inactive',
                    ])
                    ->required(),
            ]);
    }

    // Define the table columns
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('status_series')
                    ->label('Status Series')
                    ->sortable(),
                Tables\Columns\TextColumn::make('status_name')
                    ->label('Status Name')
                    ->sortable(),
                Tables\Columns\TextColumn::make('status_type')
                    ->label('Status Type')
                    ->sortable(),
                Tables\Columns\TextColumn::make('status_status')
                    ->label('Status Status')
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Created At')
                    ->sortable()
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Updated At')
                    ->sortable()
                    ->dateTime(),
            ])
            ->filters([
                // Add any filters if needed
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
            // Add any related models if needed
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListStatuses::route('/'),
            'create' => Pages\CreateStatus::route('/create'),
            'edit' => Pages\EditStatus::route('/{record}/edit'),
        ];
    }
}
