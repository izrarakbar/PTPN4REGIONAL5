<?php

namespace App\Filament\Clusters\DigitalArsip\Resources\SurKptsResource\Widgets;

use App\Models\SuratKpts;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class KptsOverview extends BaseWidget
{
    protected function getStats(): array
    {
       // Perhitungan untuk Surat Kpts
       $masihBerlakuKptsCount = SuratKpts::where('status', 'masih_berlaku')->count();
       $tidakBerlakuKptsCount = SuratKpts::where('status', 'tidak_berlaku')->count();
       return [
           // Total jumlah semua Surat Kpts
           Stat::make('Total Surat Kpts', SuratKpts::count())
               ->description('All Surat Kpts')
               ->descriptionIcon('heroicon-m-circle-stack'),

           // Jumlah Surat Kpts yang masih berlaku
           Stat::make('Surat Kpts Masih Berlaku', $masihBerlakuKptsCount)
               ->description('Jumlah surat Kpts yang masih berlaku')
               ->descriptionIcon('heroicon-m-check-circle'),

           // Jumlah Surat Kpts yang tidak berlaku
           Stat::make('Surat Kpts Tidak Berlaku', $tidakBerlakuKptsCount)
               ->description('Jumlah surat Kpts yang tidak berlaku')
               ->descriptionIcon('heroicon-m-x-circle'),
       ];
    }
}
