<?php

namespace App\Filament\Clusters\SuratKeluar\Resources\SurBagResource\Widgets;

use App\Models\SuratBagian;
use App\Models\SuratBagianOut;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class BagOverview extends BaseWidget
{
    protected function getStats(): array
    {
        // Perhitungan untuk Surat BagianOut
       $masihBerlakuBagianOutCount = SuratBagianOut::where('status', 'masih_berlaku')->count();
       $tidakBerlakuBagianOutCount = SuratBagianOut::where('status', 'tidak_berlaku')->count();
       return [
           // Total jumlah semua Surat BagianOut
           Stat::make('Total Surat Bagian', SuratBagianOut::count())
               ->description('All Surat Bagian')
               ->descriptionIcon('heroicon-m-circle-stack'),

           // Jumlah Surat BagianOut yang masih berlaku
           Stat::make('Surat Bagian Masih Berlaku', $masihBerlakuBagianOutCount)
               ->description('Jumlah surat Bagian yang masih berlaku')
               ->descriptionIcon('heroicon-m-check-circle'),

           // Jumlah Surat BagianOut yang tidak berlaku
           Stat::make('Surat Bagian Tidak Berlaku', $tidakBerlakuBagianOutCount)
               ->description('Jumlah surat Bagian yang tidak berlaku')
               ->descriptionIcon('heroicon-m-x-circle'),
       ];
    }
}
