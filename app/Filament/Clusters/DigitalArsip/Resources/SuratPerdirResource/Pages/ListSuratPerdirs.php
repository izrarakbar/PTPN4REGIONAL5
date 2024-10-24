<?php

namespace App\Filament\Clusters\DigitalArsip\Resources\SuratPerdirResource\Pages;

use App\Filament\Clusters\DigitalArsip\Resources\SuratPerdirResource;
use App\Filament\Clusters\DigitalArsip\Resources\SurperResource\Widgets\PerdirOverview;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSuratPerdirs extends ListRecords
{
    protected static string $resource = SuratPerdirResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [

            PerdirOverview::class,
        ];
    }
}
