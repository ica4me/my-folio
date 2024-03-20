<?php

namespace App\Filament\Resources\AboutmeResource\Pages;

use App\Filament\Resources\AboutmeResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAboutmes extends ListRecords
{
    protected static string $resource = AboutmeResource::class;

    protected function getActions(): array
    {
        return [
      //      Actions\CreateAction::make(),
        ];
    }
}
