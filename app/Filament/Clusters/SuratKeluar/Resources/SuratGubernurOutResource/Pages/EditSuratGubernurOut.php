<?php

namespace App\Filament\Clusters\SuratKeluar\Resources\SuratGubernurOutResource\Pages;

use App\Filament\Clusters\SuratKeluar\Resources\SuratGubernurOutResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSuratGubernurOut extends EditRecord
{
    protected static string $resource = SuratGubernurOutResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
