<?php

namespace App\Filament\Clusters\SuratKeluar\Resources\SurGubResource\Widgets;

use App\Models\SuratGubernurOut;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class GubOverview extends BaseWidget
{
    protected function getStats(): array
    {
        // Perhitungan untuk Surat GubernurOut
       $masihBerlakuGubernurOutCount = SuratGubernurOut::where('status', 'masih_berlaku')->count();
       $tidakBerlakuGubernurOutCount = SuratGubernurOut::where('status', 'tidak_berlaku')->count();
       return [
           // Total jumlah semua Surat GubernurOut
           Stat::make('Total Surat Gubernur', SuratGubernurOut::count())
               ->description('All Surat Gubernur')
               ->descriptionIcon('heroicon-m-circle-stack'),

           // Jumlah Surat GubernurOut yang masih berlaku
           Stat::make('Surat GubernurOut Masih Berlaku', $masihBerlakuGubernurOutCount)
               ->description('Jumlah surat Gubernur yang masih berlaku')
               ->descriptionIcon('heroicon-m-check-circle'),

           // Jumlah Surat GubernurOut yang tidak berlaku
           Stat::make('Surat GubernurOut Tidak Berlaku', $tidakBerlakuGubernurOutCount)
               ->description('Jumlah surat Gubernur yang tidak berlaku')
               ->descriptionIcon('heroicon-m-x-circle'),
       ];
    }
}
