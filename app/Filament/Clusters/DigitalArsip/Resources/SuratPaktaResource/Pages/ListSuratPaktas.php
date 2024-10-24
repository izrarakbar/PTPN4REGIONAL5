<?php

namespace App\Filament\Clusters\DigitalArsip\Resources\SuratPaktaResource\Pages;

use App\Filament\Clusters\DigitalArsip\Resources\SuratPaktaResource;
use App\Filament\Clusters\DigitalArsip\Resources\SurPaktaResource\Widgets\PaktaOverview;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSuratPaktas extends ListRecords
{
    protected static string $resource = SuratPaktaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [

            PaktaOverview::class,
        ];
    }
}
