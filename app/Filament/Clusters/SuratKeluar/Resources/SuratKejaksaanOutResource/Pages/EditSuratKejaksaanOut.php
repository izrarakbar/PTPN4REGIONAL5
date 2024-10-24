<?php

namespace App\Filament\Clusters\SuratKeluar\Resources\SuratKejaksaanOutResource\Pages;

use App\Filament\Clusters\SuratKeluar\Resources\SuratKejaksaanOutResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSuratKejaksaanOut extends EditRecord
{
    protected static string $resource = SuratKejaksaanOutResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
