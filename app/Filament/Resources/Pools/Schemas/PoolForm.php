<?php

namespace App\Filament\Resources\Pools\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;

class PoolForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')->required(),
                RichEditor::make('description')->required(),
                TextInput::make('location')->required(),
                FileUpload::make('image')->required(),
                TextInput::make('price')->required(),
                Select::make('category')
                    ->options([
                        'pool' => 'Pool',
                        'cement' => 'Cement',
                        'pond' => 'Pond',
                    ])
                    ->required(),
            ]);
    }
}
