<?php

namespace App\Filament\Clusters\SuratMasuk\Resources\SuratPoldaResource\Pages;

use App\Filament\Clusters\SuratMasuk\Resources\SuratPoldaResource;
use App\Filament\Clusters\SuratMasuk\Resources\SurPolinResource\Widgets\PolinOverview;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSuratPoldas extends ListRecords
{
    protected static string $resource = SuratPoldaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [

           PolinOverview::class,
        ];
    }
}
