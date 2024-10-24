<?php

namespace App\Filament\Clusters\SuratMasuk\Resources\SuratPtpninResource\Pages;

use App\Filament\Clusters\SuratMasuk\Resources\SuratPtpninResource;
use App\Filament\Clusters\SuratMasuk\Resources\SurPtpninResource\Widgets\PtpninOverview;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSuratPtpnins extends ListRecords
{
    protected static string $resource = SuratPtpninResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [

           PtpninOverview::class,
        ];
    }
}
