<?php

namespace App\Filament\Resources\Verses\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class VerseForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('number')
                    ->required()
                    ->numeric(),
                TextInput::make('vtext')
                    ->required(),
                TextInput::make('enabled')
                    ->required()
                    ->numeric(),
                TextInput::make('author_id')
                    ->numeric(),
                TextInput::make('chapter_id')
                    ->numeric(),
                TextInput::make('vlang_id')
                    ->numeric(),
            ]);
    }
}
