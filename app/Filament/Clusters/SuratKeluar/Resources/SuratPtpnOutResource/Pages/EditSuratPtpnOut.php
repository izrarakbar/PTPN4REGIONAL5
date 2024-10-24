<?php

namespace App\Filament\Clusters\SuratKeluar\Resources\SuratPtpnOutResource\Pages;

use App\Filament\Clusters\SuratKeluar\Resources\SuratPtpnOutResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSuratPtpnOut extends EditRecord
{
    protected static string $resource = SuratPtpnOutResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
