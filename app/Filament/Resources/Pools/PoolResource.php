<?php

namespace App\Filament\Resources\Pools;

use App\Filament\Resources\Pools\Pages\CreatePool;
use App\Filament\Resources\Pools\Pages\EditPool;
use App\Filament\Resources\Pools\Pages\ListPools;
use App\Filament\Resources\Pools\Schemas\PoolForm;
use App\Filament\Resources\Pools\Tables\PoolsTable;
use App\Models\Pool;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Table;

class PoolResource extends Resource
{
    protected static ?string $model = Pool::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Pool';

    public static function form(Schema $schema): Schema
    {
       return PoolForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
       return PoolsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListPools::route('/'),
            'create' => CreatePool::route('/create'),
            'edit' => EditPool::route('/{record}/edit'),
        ];
    }
}
