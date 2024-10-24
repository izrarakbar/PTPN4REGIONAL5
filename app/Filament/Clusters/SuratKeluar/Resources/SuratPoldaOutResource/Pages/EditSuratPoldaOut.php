<?php

namespace App\Filament\Clusters\SuratKeluar\Resources\SuratPoldaOutResource\Pages;

use App\Filament\Clusters\SuratKeluar\Resources\SuratPoldaOutResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSuratPoldaOut extends EditRecord
{
    protected static string $resource = SuratPoldaOutResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
