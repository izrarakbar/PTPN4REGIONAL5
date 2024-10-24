<?php

namespace App\Filament\Clusters\SuratKeluar\Resources\SurBpkpResource\Widgets;

use App\Models\SuratBpkp;
use App\Models\SuratBpkpOut;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class BpkpOverview extends BaseWidget
{
    protected function getStats(): array
    {
        // Perhitungan untuk Surat BpkpOut
       $masihBerlakuBpkpOutCount = SuratBpkpOut::where('status', 'masih_berlaku')->count();
       $tidakBerlakuBpkpOutCount = SuratBpkpOut::where('status', 'tidak_berlaku')->count();
       return [
           // Total jumlah semua Surat BpkpOut
           Stat::make('Total Surat Bpkp', SuratBpkpOut::count())
               ->description('All Surat Bpkp')
               ->descriptionIcon('heroicon-m-circle-stack'),

           // Jumlah Surat BpkpOut yang masih berlaku
           Stat::make('Surat BpkpOut Masih Berlaku', $masihBerlakuBpkpOutCount)
               ->description('Jumlah surat Bpkp yang masih berlaku')
               ->descriptionIcon('heroicon-m-check-circle'),

           // Jumlah Surat BpkpOut yang tidak berlaku
           Stat::make('Surat BpkpOut Tidak Berlaku', $tidakBerlakuBpkpOutCount)
               ->description('Jumlah surat Bpkp yang tidak berlaku')
               ->descriptionIcon('heroicon-m-x-circle'),
       ];
    }
}
