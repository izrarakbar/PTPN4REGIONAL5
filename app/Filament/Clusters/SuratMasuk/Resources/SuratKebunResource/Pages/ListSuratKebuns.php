<?php

namespace App\Filament\Clusters\SuratMasuk\Resources\SuratKebunResource\Pages;

use App\Filament\Clusters\SuratMasuk\Resources\SuratKebunResource;
use App\Filament\Clusters\SuratMasuk\Resources\SurKebinResource\Widgets\KebinOverview;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSuratKebuns extends ListRecords
{
    protected static string $resource = SuratKebunResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [

           KebinOverview::class,
        ];
    }
}
