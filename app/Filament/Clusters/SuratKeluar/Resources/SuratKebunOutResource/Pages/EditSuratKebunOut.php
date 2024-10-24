<?php

namespace App\Filament\Clusters\SuratKeluar\Resources\SuratKebunOutResource\Pages;

use App\Filament\Clusters\SuratKeluar\Resources\SuratKebunOutResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSuratKebunOut extends EditRecord
{
    protected static string $resource = SuratKebunOutResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
