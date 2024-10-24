<?php

namespace App\Filament\Clusters\SuratMasuk\Resources\SuratPtpninResource\Pages;

use App\Filament\Clusters\SuratMasuk\Resources\SuratPtpninResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSuratPtpnin extends EditRecord
{
    protected static string $resource = SuratPtpninResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
