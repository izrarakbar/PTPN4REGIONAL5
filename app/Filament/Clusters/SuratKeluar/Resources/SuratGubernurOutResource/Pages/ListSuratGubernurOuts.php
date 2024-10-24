<?php

namespace App\Filament\Clusters\SuratKeluar\Resources\SuratGubernurOutResource\Pages;

use App\Filament\Clusters\SuratKeluar\Resources\SuratGubernurOutResource;
use App\Filament\Clusters\SuratKeluar\Resources\SurGubResource\Widgets\GubOverview;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSuratGubernurOuts extends ListRecords
{
    protected static string $resource = SuratGubernurOutResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [

            GubOverview::class,
        ];
    }
}
