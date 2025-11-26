<?php

namespace App\Filament\Resources\Chapters\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ChapterForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('number')
                    ->required()
                    ->numeric(),
                TextInput::make('english_name')
                    ->required(),
                TextInput::make('arabic_name')
                    ->required(),
                TextInput::make('transliteration')
                    ->required(),
                TextInput::make('total_verses')
                    ->numeric(),
                TextInput::make('enabled')
                    ->required()
                    ->numeric(),
            ]);
    }
}
