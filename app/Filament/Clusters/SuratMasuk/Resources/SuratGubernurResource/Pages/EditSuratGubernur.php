<?php

namespace App\Filament\Clusters\SuratMasuk\Resources\SuratGubernurResource\Pages;

use App\Filament\Clusters\SuratMasuk\Resources\SuratGubernurResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSuratGubernur extends EditRecord
{
    protected static string $resource = SuratGubernurResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
