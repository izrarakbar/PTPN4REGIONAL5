<?php

namespace App\Filament\Clusters\DigitalArsip\Resources\SuratPemberitahuanResource\Pages;

use App\Filament\Clusters\DigitalArsip\Resources\SuratPemberitahuanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSuratPemberitahuan extends EditRecord
{
    protected static string $resource = SuratPemberitahuanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
