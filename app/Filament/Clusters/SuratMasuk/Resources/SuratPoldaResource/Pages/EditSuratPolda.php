<?php

namespace App\Filament\Clusters\SuratMasuk\Resources\SuratPoldaResource\Pages;

use App\Filament\Clusters\SuratMasuk\Resources\SuratPoldaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSuratPolda extends EditRecord
{
    protected static string $resource = SuratPoldaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
