<?php

namespace App\Filament\Clusters\SuratKeluar\Resources\SurKejakResource\Widgets;

use App\Models\SuratKejakasaanOut;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class KejakOverview extends BaseWidget
{
    protected function getStats(): array
    {
        // Perhitungan untuk Surat KejakasaanOut
       $masihBerlakuKejakasaanOutCount = SuratKejakasaanOut::where('status', 'masih_berlaku')->count();
       $tidakBerlakuKejakasaanOutCount = SuratKejakasaanOut::where('status', 'tidak_berlaku')->count();
       return [
           // Total jumlah semua Surat KejakasaanOut
           Stat::make('Total Surat Kejaksaan', SuratKejakasaanOut::count())
               ->description('All Surat Kejaksaan')
               ->descriptionIcon('heroicon-m-circle-stack'),

           // Jumlah Surat KejakasaanOut yang masih berlaku
           Stat::make('Surat Kejaksaan Masih Berlaku', $masihBerlakuKejakasaanOutCount)
               ->description('Jumlah surat Kejaksaan yang masih berlaku')
               ->descriptionIcon('heroicon-m-check-circle'),

           // Jumlah Surat KejakasaanOut yang tidak berlaku
           Stat::make('Surat Kejaksaan Tidak Berlaku', $tidakBerlakuKejakasaanOutCount)
               ->description('Jumlah surat Kejaksaan yang tidak berlaku')
               ->descriptionIcon('heroicon-m-x-circle'),
       ];
    }
}
