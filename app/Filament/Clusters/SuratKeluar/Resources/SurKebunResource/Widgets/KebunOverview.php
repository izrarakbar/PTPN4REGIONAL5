<?php

namespace App\Filament\Clusters\SuratKeluar\Resources\SurKebunResource\Widgets;

use App\Models\SuratKebunOut;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class KebunOverview extends BaseWidget
{
    protected function getStats(): array
    {
        // Perhitungan untuk Surat KebunOut
       $masihBerlakuKebunOutCount = SuratKebunOut::where('status', 'masih_berlaku')->count();
       $tidakBerlakuKebunOutCount = SuratKebunOut::where('status', 'tidak_berlaku')->count();
       return [
           // Total jumlah semua Surat Kebun
           Stat::make('Total Surat Kebun', SuratKebunOut::count())
               ->description('All Surat Kebun')
               ->descriptionIcon('heroicon-m-circle-stack'),

           // Jumlah Surat Kebun yang masih berlaku
           Stat::make('Surat Kebun Masih Berlaku', $masihBerlakuKebunOutCount)
               ->description('Jumlah surat Kebun yang masih berlaku')
               ->descriptionIcon('heroicon-m-check-circle'),

           // Jumlah Surat Kebun yang tidak berlaku
           Stat::make('Surat Kebun Tidak Berlaku', $tidakBerlakuKebunOutCount)
               ->description('Jumlah surat Kebun yang tidak berlaku')
               ->descriptionIcon('heroicon-m-x-circle'),
       ];
    }
}
