<?php

namespace App\Filament\Clusters\DigitalArsip\Resources\SuratMemoRandomResource\Pages;

use App\Filament\Clusters\DigitalArsip\Resources\SuratMemoRandomResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSuratMemoRandoms extends ListRecords
{
    protected static string $resource = SuratMemoRandomResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
