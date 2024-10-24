<?php

namespace App\Filament\Clusters\SuratMasuk\Resources\SurPolinResource\Widgets;

use App\Models\SuratPolda;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class PolinOverview extends BaseWidget
{
    protected function getStats(): array
    {
         // Perhitungan untuk Surat Polda
       $masihBerlakuPoldaCount = SuratPolda::where('status', 'masih_berlaku')->count();
       $tidakBerlakuPoldaCount = SuratPolda::where('status', 'tidak_berlaku')->count();
       return [
           // Total jumlah semua Surat Polda
           Stat::make('Total Surat Polda', SuratPolda::count())
               ->description('All Surat Polda')
               ->descriptionIcon('heroicon-m-circle-stack'),

           // Jumlah Surat Polda yang masih berlaku
           Stat::make('Surat Polda Masih Berlaku', $masihBerlakuPoldaCount)
               ->description('Jumlah surat Polda yang masih berlaku')
               ->descriptionIcon('heroicon-m-check-circle'),

           // Jumlah Surat Polda yang tidak berlaku
           Stat::make('Surat Polda Tidak Berlaku', $tidakBerlakuPoldaCount)
               ->description('Jumlah surat Polda yang tidak berlaku')
               ->descriptionIcon('heroicon-m-x-circle'),
       ];
    }
}
