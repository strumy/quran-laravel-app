<?php

namespace App\Filament\Resources\Languages\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class LanguageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('iso_code')
                    ->required(),
                TextInput::make('direction')
                    ->required()
                    ->numeric(),
                TextInput::make('enabled')
                    ->required()
                    ->numeric(),
            ]);
    }
}
