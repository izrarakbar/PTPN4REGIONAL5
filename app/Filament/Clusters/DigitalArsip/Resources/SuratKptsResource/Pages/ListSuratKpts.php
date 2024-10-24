<?php

namespace App\Filament\Clusters\DigitalArsip\Resources\SuratKptsResource\Pages;

use App\Filament\Clusters\DigitalArsip\Resources\SuratKptsResource;
use App\Filament\Clusters\DigitalArsip\Resources\SurKptsResource\Widgets\KptsOverview;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSuratKpts extends ListRecords
{
    protected static string $resource = SuratKptsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [

            KptsOverview::class,
        ];
    }
}
