<?php

namespace App\Filament\Clusters\SuratMasuk\Resources\SuratKejaksaanResource\Pages;

use App\Filament\Clusters\SuratMasuk\Resources\SuratKejaksaanResource;
use App\Filament\Clusters\SuratMasuk\Resources\SurKejakinResource\Widgets\KejakinOverview;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSuratKejaksaans extends ListRecords
{
    protected static string $resource = SuratKejaksaanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [

           KejakinOverview::class,
        ];
    }
}
