<?php

namespace App\Filament\Clusters\SuratKeluar\Resources\SuratBpkpOutResource\Pages;

use App\Filament\Clusters\SuratKeluar\Resources\SuratBpkpOutResource;
use App\Filament\Clusters\SuratKeluar\Resources\SurBpkpResource\Widgets\BpkpOverview;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSuratBpkpOuts extends ListRecords
{
    protected static string $resource = SuratBpkpOutResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [

            BpkpOverview::class,
        ];
    }
}
