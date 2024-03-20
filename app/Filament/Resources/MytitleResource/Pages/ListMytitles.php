<?php

namespace App\Filament\Resources\MytitleResource\Pages;

use App\Filament\Resources\MytitleResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMytitles extends ListRecords
{
    protected static string $resource = MytitleResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
