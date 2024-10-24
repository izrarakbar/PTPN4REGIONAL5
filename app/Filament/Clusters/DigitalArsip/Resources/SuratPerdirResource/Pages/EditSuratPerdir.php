<?php

namespace App\Filament\Clusters\DigitalArsip\Resources\SuratPerdirResource\Pages;

use App\Filament\Clusters\DigitalArsip\Resources\SuratPerdirResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSuratPerdir extends EditRecord
{
    protected static string $resource = SuratPerdirResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
