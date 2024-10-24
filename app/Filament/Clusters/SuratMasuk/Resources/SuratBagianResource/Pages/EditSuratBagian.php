<?php

namespace App\Filament\Clusters\SuratMasuk\Resources\SuratBagianResource\Pages;

use App\Filament\Clusters\SuratMasuk\Resources\SuratBagianResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSuratBagian extends EditRecord
{
    protected static string $resource = SuratBagianResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
