<?php

namespace App\Filament\Resources\CertificateResource\Pages;

use App\Filament\Resources\CertificateResource;
use App\Models\Certificate;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Storage;

class EditCertificate extends EditRecord
{
    protected static string $resource = CertificateResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make()->after(
                function(certificate $record){
                    if($record->foto){
                        Storage::disk('public')->delete($record->foto);

                    }
                }
            ),
        ];
    }

     //redirect ke halaman index setelah membuat data
     protected function getRedirectUrl(): string
     {
        return $this->getResource()::getUrl('index'); 
     }
}
