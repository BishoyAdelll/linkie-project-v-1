<?php

namespace App\Filament\Resources\TestemonialResource\Pages;

use App\Filament\Resources\TestemonialResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTestemonial extends EditRecord
{
    protected static string $resource = TestemonialResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
