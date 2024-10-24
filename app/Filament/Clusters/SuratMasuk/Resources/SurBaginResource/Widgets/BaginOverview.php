<?php

namespace App\Filament\Clusters\SuratMasuk\Resources\SurBaginResource\Widgets;

use App\Models\SuratBagian;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class BaginOverview extends BaseWidget
{
    protected function getStats(): array
    {
        // Perhitungan untuk Surat Bagian
        $masihBerlakuBagianCount = SuratBagian::where('status', 'masih_berlaku')->count();
        $tidakBerlakuBagianCount = SuratBagian::where('status', 'tidak_berlaku')->count();
        return [
            // Total jumlah semua Surat Bagian
            Stat::make('Total Surat Bagian', SuratBagian::count())
                ->description('All Surat Bagian')
                ->descriptionIcon('heroicon-m-circle-stack'),
 
            // Jumlah Surat Bagian yang masih berlaku
            Stat::make('Surat Bagian Masih Berlaku', $masihBerlakuBagianCount)
                ->description('Jumlah surat Bagian yang masih berlaku')
                ->descriptionIcon('heroicon-m-check-circle'),
 
            // Jumlah Surat Bagian yang tidak berlaku
            Stat::make('Surat Bagian Tidak Berlaku', $tidakBerlakuBagianCount)
                ->description('Jumlah surat Bagian yang tidak berlaku')
                ->descriptionIcon('heroicon-m-x-circle'),
        ];
    }
}
