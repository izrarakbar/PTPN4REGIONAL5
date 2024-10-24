<?php

namespace App\Filament\Clusters\SuratKeluar\Resources\SuratPoldaOutResource\Pages;

use App\Filament\Clusters\SuratKeluar\Resources\SuratPoldaOutResource;
use App\Filament\Clusters\SuratKeluar\Resources\SurPolResource\Widgets\PolOverview;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSuratPoldaOuts extends ListRecords
{
    protected static string $resource = SuratPoldaOutResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [

            PolOverview::class,
        ];
    }
}
