<?php

namespace App\Filament\Clusters\DigitalArsip\Resources\SuratPaktaResource\Pages;

use App\Filament\Clusters\DigitalArsip\Resources\SuratPaktaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSuratPakta extends EditRecord
{
    protected static string $resource = SuratPaktaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
