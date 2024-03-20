<?php

namespace App\Filament\Resources\ProfileResource\Pages;

use App\Filament\Resources\ProfileResource;
use App\Models\profile;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Storage;

class EditProfile extends EditRecord
{
    protected static string $resource = ProfileResource::class;

    protected function getActions(): array
    {
        return [
        //    Actions\DeleteAction::make()->after(
          //      function(profile $record){
            //        if($record->foto){
              //          Storage::disk('public')->delete($record->foto);
            //        }
              //  }
        //    ),
        ];
    }

     //redirect ke halaman index setelah membuat data
     protected function getRedirectUrl(): string
     {
        return $this->getResource()::getUrl('index'); 
     }
}
