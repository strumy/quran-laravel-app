<?php

namespace App\Filament\Resources\Authors\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class AuthorInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('name'),
                TextEntry::make('country')
                    ->placeholder('-'),
                TextEntry::make('city')
                    ->placeholder('-'),
                TextEntry::make('translation_source')
                    ->placeholder('-'),
                TextEntry::make('date_published')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('enabled')
                    ->numeric(),
                TextEntry::make('alang')
                    ->numeric()
                    ->placeholder('-'),
                TextEntry::make('alang_id')
                    ->numeric(),
            ]);
    }
}
