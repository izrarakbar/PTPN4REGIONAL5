<?php

namespace App\Filament\Clusters\SuratMasuk\Resources\SurGubinResource\Widgets;

use App\Models\SuratGubernur;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class GubinOverview extends BaseWidget
{
    protected function getStats(): array
    {
        // Perhitungan untuk Surat Gubernur
        $masihBerlakuGubernurCount = SuratGubernur::where('status', 'masih_berlaku')->count();
        $tidakBerlakuGubernurCount = SuratGubernur::where('status', 'tidak_berlaku')->count();
        return [
            // Total jumlah semua Surat Gubernur
            Stat::make('Total Surat Gubernur', SuratGubernur::count())
                ->description('All Surat Gubernur')
                ->descriptionIcon('heroicon-m-circle-stack'),
 
            // Jumlah Surat Gubernur yang masih berlaku
            Stat::make('Surat Gubernur Masih Berlaku', $masihBerlakuGubernurCount)
                ->description('Jumlah surat Gubernur yang masih berlaku')
                ->descriptionIcon('heroicon-m-check-circle'),
 
            // Jumlah Surat Gubernur yang tidak berlaku
            Stat::make('Surat Gubernur Tidak Berlaku', $tidakBerlakuGubernurCount)
                ->description('Jumlah surat Gubernur yang tidak berlaku')
                ->descriptionIcon('heroicon-m-x-circle'),
        ];
    }
}
