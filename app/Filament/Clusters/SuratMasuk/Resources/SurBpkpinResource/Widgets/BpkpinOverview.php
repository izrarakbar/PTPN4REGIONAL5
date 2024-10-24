<?php

namespace App\Filament\Clusters\SuratMasuk\Resources\SurBpkpinResource\Widgets;

use App\Models\SuratBpkp;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class BpkpinOverview extends BaseWidget
{
    protected function getStats(): array
    {
         // Perhitungan untuk Surat Bpkp
       $masihBerlakuBpkpCount = SuratBpkp::where('status', 'masih_berlaku')->count();
       $tidakBerlakuBpkpCount = SuratBpkp::where('status', 'tidak_berlaku')->count();
       return [
           // Total jumlah semua Surat BPKP
           Stat::make('Total Surat BPKP', SuratBpkp::count())
               ->description('All Surat Bpkp')
               ->descriptionIcon('heroicon-m-circle-stack'),

           // Jumlah Surat Bpkp yang masih berlaku
           Stat::make('Surat BPKP Masih Berlaku', $masihBerlakuBpkpCount)
               ->description('Jumlah surat BPKP yang masih berlaku')
               ->descriptionIcon('heroicon-m-check-circle'),

           // Jumlah Surat Bpkp yang tidak berlaku
           Stat::make('Surat BPKP Tidak Berlaku', $tidakBerlakuBpkpCount)
               ->description('Jumlah surat BPKP yang tidak berlaku')
               ->descriptionIcon('heroicon-m-x-circle'),
       ];
    }
}
