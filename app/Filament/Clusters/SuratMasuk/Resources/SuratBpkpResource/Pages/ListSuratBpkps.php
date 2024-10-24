<?php

namespace App\Filament\Clusters\SuratMasuk\Resources\SuratBpkpResource\Pages;

use App\Filament\Clusters\SuratMasuk\Resources\SuratBpkpResource;
use App\Filament\Clusters\SuratMasuk\Resources\SurBpkpinResource\Widgets\BpkpinOverview;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSuratBpkps extends ListRecords
{
    protected static string $resource = SuratBpkpResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }


    protected function getHeaderWidgets(): array
    {
        return [

           BpkpinOverview::class,
        ];
    }
}
