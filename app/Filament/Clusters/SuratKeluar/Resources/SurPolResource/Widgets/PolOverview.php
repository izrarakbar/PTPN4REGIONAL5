<?php

namespace App\Filament\Clusters\SuratKeluar\Resources\SurPolResource\Widgets;

use App\Models\SuratPolda;
use App\Models\SuratPoldaOut;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class PolOverview extends BaseWidget
{
    protected function getStats(): array
    {
        // Perhitungan untuk Surat PoldaOut
       $masihBerlakuPoldaOutCount = SuratPoldaOut::where('status', 'masih_berlaku')->count();
       $tidakBerlakuPoldaOutCount = SuratPoldaOut::where('status', 'tidak_berlaku')->count();
       return [
           // Total jumlah semua Surat Polda
           Stat::make('Total Surat Polda', SuratPoldaOut::count())
               ->description('All Surat PoldaOut')
               ->descriptionIcon('heroicon-m-circle-stack'),

           // Jumlah Surat PoldaOut yang masih berlaku
           Stat::make('Surat Polda Masih Berlaku', $masihBerlakuPoldaOutCount)
               ->description('Jumlah surat Polda yang masih berlaku')
               ->descriptionIcon('heroicon-m-check-circle'),

           // Jumlah Surat PoldaOut yang tidak berlaku
           Stat::make('Surat Polda Tidak Berlaku', $tidakBerlakuPoldaOutCount)
               ->description('Jumlah surat Polda yang tidak berlaku')
               ->descriptionIcon('heroicon-m-x-circle'),
       ];
    }
}
