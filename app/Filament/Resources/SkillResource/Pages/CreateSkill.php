<?php

namespace App\Filament\Resources\SkillResource\Pages;

use App\Filament\Resources\SkillResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateSkill extends CreateRecord
{
    protected static string $resource = SkillResource::class;


     //redirect ke halaman index setelah membuat data
     protected function getRedirectUrl(): string
     {
        return $this->getResource()::getUrl('index'); 
     }
}
