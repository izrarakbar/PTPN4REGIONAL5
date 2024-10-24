<?php

namespace App\Filament\Clusters\SuratKeluar\Resources\SuratBpkpOutResource\Pages;

use App\Filament\Clusters\SuratKeluar\Resources\SuratBpkpOutResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSuratBpkpOut extends EditRecord
{
    protected static string $resource = SuratBpkpOutResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
