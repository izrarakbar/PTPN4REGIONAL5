<?php

namespace App\Filament\Clusters\SuratMasuk\Resources\SuratKejaksaanResource\Pages;

use App\Filament\Clusters\SuratMasuk\Resources\SuratKejaksaanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSuratKejaksaan extends EditRecord
{
    protected static string $resource = SuratKejaksaanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
