<?php

namespace App\Filament\Clusters\DigitalArsip\Resources\SurPaktaResource\Widgets;

use App\Models\SuratPakta;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class PaktaOverview extends BaseWidget
{
    protected function getStats(): array
    {
        // Perhitungan untuk Surat Pakta
        $masihBerlakuPaktaCount = SuratPakta::where('status', 'masih_berlaku')->count();
        $tidakBerlakuPaktaCount = SuratPakta::where('status', 'tidak_berlaku')->count();
        return [
            // Total jumlah semua Surat Pakta
            Stat::make('Total Surat Pakta', SuratPakta::count())
                ->description('All Surat Pakta')
                ->descriptionIcon('heroicon-m-circle-stack'),

            // Jumlah Surat Pakta yang masih berlaku
            Stat::make('Surat Pakta Masih Berlaku', $masihBerlakuPaktaCount)
                ->description('Jumlah surat Pakta yang masih berlaku')
                ->descriptionIcon('heroicon-m-check-circle'),

            // Jumlah Surat Pakta yang tidak berlaku
            Stat::make('Surat Pakta Tidak Berlaku', $tidakBerlakuPaktaCount)
                ->description('Jumlah surat Pakta yang tidak berlaku')
                ->descriptionIcon('heroicon-m-x-circle'),
        ];
    }
}
