<?php

namespace App\Filament\Resources\TestemonialResource\Pages;

use App\Filament\Resources\TestemonialResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewTestemonial extends ViewRecord
{
    protected static string $resource = TestemonialResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
