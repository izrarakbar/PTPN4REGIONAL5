<?php

namespace App\Filament\Clusters\DigitalArsip\Resources\SuratSeResource\Pages;

use App\Filament\Clusters\DigitalArsip\Resources\DigitalArsipResource\Widgets\StatOverview;
use App\Filament\Clusters\DigitalArsip\Resources\SuratSeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;


class ListSuratSes extends ListRecords
{
    protected static string $resource = SuratSeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [

            StatOverview::class,
        ];
    }
}
