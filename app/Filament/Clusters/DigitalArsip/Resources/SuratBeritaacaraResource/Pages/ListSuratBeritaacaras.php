<?php

namespace App\Filament\Clusters\DigitalArsip\Resources\SuratBeritaacaraResource\Pages;

use App\Filament\Clusters\DigitalArsip\Resources\SuratBeritaacaraResource;
use App\Filament\Clusters\DigitalArsip\Resources\SurBerResource\Widgets\BeritaOverview;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSuratBeritaacaras extends ListRecords
{
    protected static string $resource = SuratBeritaacaraResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    
    protected function getHeaderWidgets(): array
    {
        return [

            BeritaOverview::class,
        ];
    }
}
