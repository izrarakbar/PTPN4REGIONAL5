<?php

namespace App\Filament\Clusters\SuratMasuk\Resources\SurKebinResource\Widgets;

use App\Models\SuratKebun;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class KebinOverview extends BaseWidget
{
    protected function getStats(): array
    {
         // Perhitungan untuk Surat Kebun
       $masihBerlakuKebunCount = SuratKebun::where('status', 'masih_berlaku')->count();
       $tidakBerlakuKebunCount = SuratKebun::where('status', 'tidak_berlaku')->count();
       return [
           // Total jumlah semua Surat Kebun
           Stat::make('Total Surat Kebun', SuratKebun::count())
               ->description('All Surat Kebun')
               ->descriptionIcon('heroicon-m-circle-stack'),

           // Jumlah Surat Kebun yang masih berlaku
           Stat::make('Surat Kebun Masih Berlaku', $masihBerlakuKebunCount)
               ->description('Jumlah surat Kebun yang masih berlaku')
               ->descriptionIcon('heroicon-m-check-circle'),

           // Jumlah Surat Kebun yang tidak berlaku
           Stat::make('Surat Kebun Tidak Berlaku', $tidakBerlakuKebunCount)
               ->description('Jumlah surat Kebun yang tidak berlaku')
               ->descriptionIcon('heroicon-m-x-circle'),
       ];
    }
}
