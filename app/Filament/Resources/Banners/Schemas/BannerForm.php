<?php

namespace App\Filament\Resources\Banners\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class BannerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->default(null),
                FileUpload::make('image')
                    ->image()
                    ->disk('public')
                    ->directory('banners')
                    ->required(),
                TextInput::make('description')
                    ->default(null),
                TextInput::make('link')
                    ->default(null),
                Toggle::make('status')
                    ->required(),
            ]);
    }
}
