<?php

namespace App\Filament\Clusters\SuratMasuk\Resources\SuratBagianResource\Pages;

use App\Filament\Clusters\SuratMasuk\Resources\SuratBagianResource;
use App\Filament\Clusters\SuratMasuk\Resources\SurBaginResource\Widgets\BaginOverview;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSuratBagians extends ListRecords
{
    protected static string $resource = SuratBagianResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    
    protected function getHeaderWidgets(): array
    {
        return [

            BaginOverview::class,
        ];
    }
}
