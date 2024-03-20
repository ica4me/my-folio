<?php

namespace App\Filament\Resources\MytitleResource\Pages;

use App\Filament\Resources\MytitleResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMytitle extends EditRecord
{
    protected static string $resource = MytitleResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

     //redirect ke halaman index setelah membuat data
     protected function getRedirectUrl(): string
     {
        return $this->getResource()::getUrl('index'); 
     }


}
