<?php

namespace App\Filament\Resources\DendaResource\Pages;

use App\Filament\Resources\DendaResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateDenda extends CreateRecord
{
    protected static string $resource = DendaResource::class;
    protected static bool $canCreateAnother = false;

    //customize redirect after create
    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
