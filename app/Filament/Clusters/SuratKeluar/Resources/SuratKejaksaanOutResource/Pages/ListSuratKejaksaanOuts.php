<?php

namespace App\Filament\Clusters\SuratKeluar\Resources\SuratKejaksaanOutResource\Pages;

use App\Filament\Clusters\SuratKeluar\Resources\SuratKejaksaanOutResource;
use App\Filament\Clusters\SuratKeluar\Resources\SurKejakResource\Widgets\KejakOverview;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSuratKejaksaanOuts extends ListRecords
{
    protected static string $resource = SuratKejaksaanOutResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [

            KejakOverview::class,
        ];
    }
}
