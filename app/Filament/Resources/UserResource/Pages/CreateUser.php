<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Carbon\Carbon;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;

    protected function handleRecordCreation(array $data): Model
    {
        $data['email_verified_at']=Carbon::now();
        $user = parent::handleRecordCreation($data);
        $user->assignRole('admin');
        // $user['email_verified_at'] = Carbon::now();
        return $user;

    }
}
