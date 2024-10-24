<?php

namespace App\Filament\Clusters\DigitalArsip\Resources\DigitalArsipResource\Widgets;

use App\Models\SuratSe;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatOverview extends BaseWidget
{
    protected function getStats(): array
    {
        // Perhitungan untuk Surat SE
        $masihBerlakuSeCount = SuratSe::where('status', 'masih_berlaku')->count();
        $tidakBerlakuSeCount = SuratSe::where('status', 'tidak_berlaku')->count();

     

        return [
            // Total jumlah semua Surat SE
            Stat::make('Total Surat SE', SuratSe::count())
                ->description('All Surat SE')
                ->descriptionIcon('heroicon-m-circle-stack'),

            // Jumlah Surat SE yang masih berlaku
            Stat::make('Surat SE Masih Berlaku', $masihBerlakuSeCount)
                ->description('Jumlah surat SE yang masih berlaku')
                ->descriptionIcon('heroicon-m-check-circle'),

            // Jumlah Surat SE yang tidak berlaku
            Stat::make('Surat SE Tidak Berlaku', $tidakBerlakuSeCount)
                ->description('Jumlah surat SE yang tidak berlaku')
                ->descriptionIcon('heroicon-m-x-circle'),

            
        ];
    }
}
