<?php

namespace App\Filament\Clusters\SuratMasuk\Resources\SuratBpkpResource\Pages;

use App\Filament\Clusters\SuratMasuk\Resources\SuratBpkpResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSuratBpkp extends EditRecord
{
    protected static string $resource = SuratBpkpResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
