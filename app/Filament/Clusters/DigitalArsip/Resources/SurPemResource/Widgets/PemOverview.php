<?php

namespace App\Filament\Clusters\DigitalArsip\Resources\SurPemResource\Widgets;

use App\Models\SuratPemberitahuan;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class PemOverview extends BaseWidget
{
    protected function getStats(): array
    {
        // Perhitungan untuk Surat Pemberitahuan
        $masihBerlakuPemberitahuanCount = SuratPemberitahuan::where('status', 'masih_berlaku')->count();
        $tidakBerlakuPemberitahuanCount = SuratPemberitahuan::where('status', 'tidak_berlaku')->count();
        return [
            // Total jumlah semua Surat Pemberitahuan
            Stat::make('Total Surat Pemberitahuan', SuratPemberitahuan::count())
                ->description('All Surat Pemberitahuan')
                ->descriptionIcon('heroicon-m-circle-stack'),

            // Jumlah Surat Pemberitahuan yang masih berlaku
            Stat::make('Surat Pemberitahuan Masih Berlaku', $masihBerlakuPemberitahuanCount)
                ->description('Jumlah surat Pemberitahuan yang masih berlaku')
                ->descriptionIcon('heroicon-m-check-circle'),

            // Jumlah Surat Pemberitahuan yang tidak berlaku
            Stat::make('Surat Pemberitahuan Tidak Berlaku', $tidakBerlakuPemberitahuanCount)
                ->description('Jumlah surat Pemberitahuan yang tidak berlaku')
                ->descriptionIcon('heroicon-m-x-circle'),
        ];
    }
}
