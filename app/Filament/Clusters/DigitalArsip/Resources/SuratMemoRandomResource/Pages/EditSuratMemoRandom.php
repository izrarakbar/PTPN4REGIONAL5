<?php

namespace App\Filament\Clusters\DigitalArsip\Resources\SuratMemoRandomResource\Pages;

use App\Filament\Clusters\DigitalArsip\Resources\SuratMemoRandomResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSuratMemoRandom extends EditRecord
{
    protected static string $resource = SuratMemoRandomResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
