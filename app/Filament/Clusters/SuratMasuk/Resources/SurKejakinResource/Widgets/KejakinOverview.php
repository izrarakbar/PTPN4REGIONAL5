<?php

namespace App\Filament\Clusters\SuratMasuk\Resources\SurKejakinResource\Widgets;

use App\Models\SuratKejakasaan;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class KejakinOverview extends BaseWidget
{
    protected function getStats(): array
    {
         // Perhitungan untuk Surat Kejaksaan
       $masihBerlakuKejaksaanCount = SuratKejakasaan::where('status', 'masih_berlaku')->count();
       $tidakBerlakuKejaksaanCount = SuratKejakasaan::where('status', 'tidak_berlaku')->count();
       return [
           // Total jumlah semua Surat Kejaksaan
           Stat::make('Total Surat Kejaksaan', SuratKejakasaan::count())
               ->description('All Surat Kejaksaan')
               ->descriptionIcon('heroicon-m-circle-stack'),

           // Jumlah Surat Kejaksaan yang masih berlaku
           Stat::make('Surat Kejaksaan Masih Berlaku', $masihBerlakuKejaksaanCount)
               ->description('Jumlah surat Kejaksaan yang masih berlaku')
               ->descriptionIcon('heroicon-m-check-circle'),

           // Jumlah Surat Kejaksaan yang tidak berlaku
           Stat::make('Surat Kejaksaan Tidak Berlaku', $tidakBerlakuKejaksaanCount)
               ->description('Jumlah surat Kejaksaan yang tidak berlaku')
               ->descriptionIcon('heroicon-m-x-circle'),
       ];
    }
}
