<?php

namespace App\Filament\Resources\MytitleResource\Pages;

use App\Filament\Resources\MytitleResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateMytitle extends CreateRecord
{
    protected static string $resource = MytitleResource::class;


    //redirect ke halaman index setelah membuat data
    protected function getRedirectUrl(): string
    {
       return $this->getResource()::getUrl('index'); 
    }
}
