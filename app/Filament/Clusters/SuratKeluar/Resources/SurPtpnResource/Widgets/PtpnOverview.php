<?php

namespace App\Filament\Clusters\SuratKeluar\Resources\SurPtpnResource\Widgets;

use App\Models\SuratPtpnOut;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class PtpnOverview extends BaseWidget
{
    protected function getStats(): array
    {
        // Perhitungan untuk Surat PtpnOut
       $masihBerlakuPtpnOutCount = SuratPtpnOut::where('status', 'masih_berlaku')->count();
       $tidakBerlakuPtpnOutCount = SuratPtpnOut::where('status', 'tidak_berlaku')->count();
       return [
           // Total jumlah semua Surat PtpnOut
           Stat::make('Total Surat Ptpn', SuratPtpnOut::count())
               ->description('All Surat Ptpn')
               ->descriptionIcon('heroicon-m-circle-stack'),

           // Jumlah Surat PtpnOut yang masih berlaku
           Stat::make('Surat Ptpn Masih Berlaku', $masihBerlakuPtpnOutCount)
               ->description('Jumlah surat Ptpn yang masih berlaku')
               ->descriptionIcon('heroicon-m-check-circle'),

           // Jumlah Surat PtpnOut yang tidak berlaku
           Stat::make('Surat PtpnOut Tidak Berlaku', $tidakBerlakuPtpnOutCount)
               ->description('Jumlah surat Ptpn yang tidak berlaku')
               ->descriptionIcon('heroicon-m-x-circle'),
       ];
    }
}
