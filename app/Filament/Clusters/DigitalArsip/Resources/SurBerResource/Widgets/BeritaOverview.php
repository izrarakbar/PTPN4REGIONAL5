<?php

namespace App\Filament\Clusters\DigitalArsip\Resources\SurBerResource\Widgets;

use App\Models\SuratBeritaacara;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class BeritaOverview extends BaseWidget
{
    protected function getStats(): array
    {
       // Perhitungan untuk Surat Beritaacara
       $masihBerlakuBeritaacaraCount = SuratBeritaacara::where('status', 'masih_berlaku')->count();
       $tidakBerlakuBeritaacaraCount = SuratBeritaacara::where('status', 'tidak_berlaku')->count();
       return [
           // Total jumlah semua Surat Beritaacara
           Stat::make('Total Surat Beritaacara', SuratBeritaacara::count())
               ->description('All Surat Beritaacara')
               ->descriptionIcon('heroicon-m-circle-stack'),

           // Jumlah Surat Beritaacara yang masih berlaku
           Stat::make('Surat Beritaacara Masih Berlaku', $masihBerlakuBeritaacaraCount)
               ->description('Jumlah surat Beritaacara yang masih berlaku')
               ->descriptionIcon('heroicon-m-check-circle'),

           // Jumlah Surat Beritaacara yang tidak berlaku
           Stat::make('Surat Beritaacara Tidak Berlaku', $tidakBerlakuBeritaacaraCount)
               ->description('Jumlah surat Beritaacara yang tidak berlaku')
               ->descriptionIcon('heroicon-m-x-circle'),
       ];
    }
}
