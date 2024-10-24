<?php

namespace App\Filament\Clusters\SuratMasuk\Resources\SuratKebunResource\Pages;

use App\Filament\Clusters\SuratMasuk\Resources\SuratKebunResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSuratKebun extends EditRecord
{
    protected static string $resource = SuratKebunResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
