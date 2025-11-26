<?php

namespace App\Filament\Resources\Verses\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class VersesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('number')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('vtext')
                    ->searchable(),
                TextColumn::make('enabled')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('author_id')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('chapter_id')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('vlang_id')
                    ->numeric()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
