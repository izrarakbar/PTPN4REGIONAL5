<?php

namespace App\Filament\Clusters\DigitalArsip\Resources\SuratNotulenResource\Pages;

use App\Filament\Clusters\DigitalArsip\Resources\SuratNotulenResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSuratNotulen extends EditRecord
{
    protected static string $resource = SuratNotulenResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
