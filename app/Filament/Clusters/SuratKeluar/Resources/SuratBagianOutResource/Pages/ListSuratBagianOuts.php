<?php

namespace App\Filament\Clusters\SuratKeluar\Resources\SuratBagianOutResource\Pages;

use App\Filament\Clusters\SuratKeluar\Resources\SuratBagianOutResource;
use App\Filament\Clusters\SuratKeluar\Resources\SurBagResource\Widgets\BagOverview;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSuratBagianOuts extends ListRecords
{
    protected static string $resource = SuratBagianOutResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    
    protected function getHeaderWidgets(): array
    {
        return [

            BagOverview::class,
        ];
    }
}
