<?php

namespace App\Filament\Clusters\DigitalArsip\Resources\SurperResource\Widgets;

use App\Models\SuratPerdir;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class PerdirOverview extends BaseWidget
{
    protected function getStats(): array
    {
        // Perhitungan untuk Surat PERDIR
        $masihBerlakuPerdirCount = SuratPerdir::where('status', 'masih_berlaku')->count();
        $tidakBerlakuPerdirCount = SuratPerdir::where('status', 'tidak_berlaku')->count();
        return [
            // Total jumlah semua Surat PERDIR
            Stat::make('Total Surat PERDIR', SuratPerdir::count())
                ->description('All Surat PERDIR')
                ->descriptionIcon('heroicon-m-circle-stack'),

            // Jumlah Surat PERDIR yang masih berlaku
            Stat::make('Surat PERDIR Masih Berlaku', $masihBerlakuPerdirCount)
                ->description('Jumlah surat PERDIR yang masih berlaku')
                ->descriptionIcon('heroicon-m-check-circle'),

            // Jumlah Surat PERDIR yang tidak berlaku
            Stat::make('Surat PERDIR Tidak Berlaku', $tidakBerlakuPerdirCount)
                ->description('Jumlah surat PERDIR yang tidak berlaku')
                ->descriptionIcon('heroicon-m-x-circle'),
        ];
    }
}
