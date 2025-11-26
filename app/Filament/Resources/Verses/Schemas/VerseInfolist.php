<?php

namespace App\Filament\Resources\Verses\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class VerseInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('number')
                    ->numeric(),
                TextEntry::make('vtext'),
                TextEntry::make('enabled')
                    ->numeric(),
                TextEntry::make('author_id')
                    ->numeric()
                    ->placeholder('-'),
                TextEntry::make('chapter_id')
                    ->numeric()
                    ->placeholder('-'),
                TextEntry::make('vlang_id')
                    ->numeric()
                    ->placeholder('-'),
            ]);
    }
}
