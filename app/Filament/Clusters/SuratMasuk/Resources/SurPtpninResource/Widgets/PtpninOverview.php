<?php

namespace App\Filament\Clusters\SuratMasuk\Resources\SurPtpninResource\Widgets;

use App\Models\SuratPtpn;
use App\Models\SuratPtpnin;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class PtpninOverview extends BaseWidget
{
    protected function getStats(): array
    {
         // Perhitungan untuk Surat Ptpn
       $masihBerlakuPtpnCount = SuratPtpnin::where('status', 'masih_berlaku')->count();
       $tidakBerlakuPtpnCount = SuratPtpnin::where('status', 'tidak_berlaku')->count();
       return [
           // Total jumlah semua Surat PTPN
           Stat::make('Total Surat PTPN', SuratPtpnin::count())
               ->description('All Surat Ptpn')
               ->descriptionIcon('heroicon-m-circle-stack'),

           // Jumlah Surat Ptpn yang masih berlaku
           Stat::make('Surat PTPN Masih Berlaku', $masihBerlakuPtpnCount)
               ->description('Jumlah surat PTPN yang masih berlaku')
               ->descriptionIcon('heroicon-m-check-circle'),

           // Jumlah Surat Ptpn yang tidak berlaku
           Stat::make('Surat PTPN Tidak Berlaku', $tidakBerlakuPtpnCount)
               ->description('Jumlah surat PTPN yang tidak berlaku')
               ->descriptionIcon('heroicon-m-x-circle'),
       ];
    }
}
