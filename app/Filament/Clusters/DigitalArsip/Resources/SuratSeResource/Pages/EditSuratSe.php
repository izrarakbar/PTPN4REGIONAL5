<?php

namespace App\Filament\Clusters\DigitalArsip\Resources\SuratSeResource\Pages;

use App\Filament\Clusters\DigitalArsip\Resources\SuratSeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSuratSe extends EditRecord
{
    protected static string $resource = SuratSeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
