<?php

namespace App\Filament\Clusters\SuratKeluar\Resources\SuratPtpnOutResource\Pages;

use App\Filament\Clusters\SuratKeluar\Resources\SuratPtpnOutResource;
use App\Filament\Clusters\SuratKeluar\Resources\SurPtpnResource\Widgets\PtpnOverview;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSuratPtpnOuts extends ListRecords
{
    protected static string $resource = SuratPtpnOutResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [

            PtpnOverview::class,
        ];
    }
}
