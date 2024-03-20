<?php

namespace App\Filament\Resources\AboutmeResource\Pages;

use App\Filament\Resources\AboutmeResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAboutme extends EditRecord
{
    protected static string $resource = AboutmeResource::class;

    protected function getActions(): array
    {
        return [
         //   Actions\DeleteAction::make(),
        ];
    }


     //redirect ke halaman index setelah membuat data
     protected function getRedirectUrl(): string
     {
        return $this->getResource()::getUrl('index'); 
     }
}
