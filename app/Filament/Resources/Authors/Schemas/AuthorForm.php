<?php

namespace App\Filament\Resources\Authors\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class AuthorForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('country'),
                TextInput::make('city'),
                TextInput::make('translation_source'),
                DateTimePicker::make('date_published'),
                TextInput::make('enabled')
                    ->required()
                    ->numeric(),
                TextInput::make('alang')
                    ->numeric(),
                TextInput::make('alang_id')
                    ->required()
                    ->numeric(),
            ]);
    }
}
