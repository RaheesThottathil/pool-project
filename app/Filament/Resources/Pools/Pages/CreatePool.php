<?php

namespace App\Filament\Resources\Pools\Pages;

use App\Filament\Resources\Pools\PoolResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePool extends CreateRecord
{
    protected static string $resource = PoolResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }       

    protected function getCreatedNotificationTitle(): ?string
    {
        return 'Pool created successfully';
    }
}
