<?php

namespace App\Filament\Resources\ContactUs\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class ContactUsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->searchable(),
                TextColumn::make('email')->searchable(),
                TextColumn::make('phone')->searchable(),
                TextColumn::make('message')
                ->limit(20)
                ->searchable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
             ViewAction::make()
             ->label(''),  
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
