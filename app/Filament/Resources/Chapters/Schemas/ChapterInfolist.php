<?php

namespace App\Filament\Resources\Chapters\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class ChapterInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('number')
                    ->numeric(),
                TextEntry::make('english_name'),
                TextEntry::make('arabic_name'),
                TextEntry::make('transliteration'),
                TextEntry::make('total_verses')
                    ->numeric()
                    ->placeholder('-'),
                TextEntry::make('enabled')
                    ->numeric(),
            ]);
    }
}
