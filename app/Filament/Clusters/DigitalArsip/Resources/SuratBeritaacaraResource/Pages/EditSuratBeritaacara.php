<?php

namespace App\Filament\Clusters\DigitalArsip\Resources\SuratBeritaacaraResource\Pages;

use App\Filament\Clusters\DigitalArsip\Resources\SuratBeritaacaraResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSuratBeritaacara extends EditRecord
{
    protected static string $resource = SuratBeritaacaraResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
