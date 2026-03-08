<?php

namespace App\Filament\Resources\Pools\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;        

class PoolsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->searchable(),
                TextColumn::make('description')->searchable()
                ->html(),
                TextColumn::make('location')->searchable(),
                ImageColumn::make('image')->searchable(),
                TextColumn::make('price')->searchable(),
                TextColumn::make('category')->searchable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make()
                ->label(''),
                DeleteAction::make()
                ->label(''),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
