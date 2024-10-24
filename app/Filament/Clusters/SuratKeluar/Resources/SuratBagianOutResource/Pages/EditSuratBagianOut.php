<?php

namespace App\Filament\Clusters\SuratKeluar\Resources\SuratBagianOutResource\Pages;

use App\Filament\Clusters\SuratKeluar\Resources\SuratBagianOutResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSuratBagianOut extends EditRecord
{
    protected static string $resource = SuratBagianOutResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
