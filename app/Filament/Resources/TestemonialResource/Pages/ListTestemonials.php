<?php

namespace App\Filament\Resources\TestemonialResource\Pages;

use App\Filament\Resources\TestemonialResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTestemonials extends ListRecords
{
    protected static string $resource = TestemonialResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
