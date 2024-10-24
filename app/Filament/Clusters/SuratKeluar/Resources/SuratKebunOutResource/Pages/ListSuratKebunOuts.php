<?php

namespace App\Filament\Clusters\SuratKeluar\Resources\SuratKebunOutResource\Pages;

use App\Filament\Clusters\SuratKeluar\Resources\SuratKebunOutResource;
use App\Filament\Clusters\SuratKeluar\Resources\SurKebunResource\Widgets\KebunOverview;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSuratKebunOuts extends ListRecords
{
    protected static string $resource = SuratKebunOutResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [

            KebunOverview::class,
        ];
    }
}
