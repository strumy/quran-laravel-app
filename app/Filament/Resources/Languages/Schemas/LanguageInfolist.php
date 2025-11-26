<?php

namespace App\Filament\Resources\Languages\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class LanguageInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('name'),
                TextEntry::make('iso_code'),
                TextEntry::make('direction')
                    ->numeric(),
                TextEntry::make('enabled')
                    ->numeric(),
            ]);
    }
}
