<?php

namespace App\Filament\Clusters\DigitalArsip\Resources\SuratPemberitahuanResource\Pages;

use App\Filament\Clusters\DigitalArsip\Resources\SuratPemberitahuanResource;
use App\Filament\Clusters\DigitalArsip\Resources\SurPemResource\Widgets\PemOverview;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSuratPemberitahuans extends ListRecords
{
    protected static string $resource = SuratPemberitahuanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [

            PemOverview::class,
        ];
    }
}
