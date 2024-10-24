<?php

namespace App\Filament\Clusters\SuratMasuk\Resources\SuratGubernurResource\Pages;

use App\Filament\Clusters\SuratMasuk\Resources\SuratGubernurResource;
use App\Filament\Clusters\SuratMasuk\Resources\SurGubinResource\Widgets\GubinOverview;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSuratGubernurs extends ListRecords
{
    protected static string $resource = SuratGubernurResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [

           GubinOverview::class,
        ];
    }
}
