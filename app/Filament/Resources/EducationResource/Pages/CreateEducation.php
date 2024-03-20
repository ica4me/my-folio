<?php

namespace App\Filament\Resources\EducationResource\Pages;

use App\Filament\Resources\EducationResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateEducation extends CreateRecord
{
    protected static string $resource = EducationResource::class;

     //redirect ke halaman index setelah membuat data
     protected function getRedirectUrl(): string
     {
        return $this->getResource()::getUrl('index'); 
     }
}
