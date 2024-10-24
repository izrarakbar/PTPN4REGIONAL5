<?php

namespace App\Filament\Clusters\DigitalArsip\Resources\SurNoteResource\Widgets;

use App\Models\SuratNotulen;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class NoteOverview extends BaseWidget
{
    protected function getStats(): array
    {
        // Perhitungan untuk Surat Notulen
        $masihBerlakuNotulenCount = SuratNotulen::where('status', 'masih_berlaku')->count();
        $tidakBerlakuNotulenCount = SuratNotulen::where('status', 'tidak_berlaku')->count();
        return [
            // Total jumlah semua Surat Notulen
            Stat::make('Total Surat Notulen', SuratNotulen::count())
                ->description('All Surat Notulen')
                ->descriptionIcon('heroicon-m-circle-stack'),

            // Jumlah Surat Notulen yang masih berlaku
            Stat::make('Surat Notulen Masih Berlaku', $masihBerlakuNotulenCount)
                ->description('Jumlah surat Notulen yang masih berlaku')
                ->descriptionIcon('heroicon-m-check-circle'),

            // Jumlah Surat Notulen yang tidak berlaku
            Stat::make('Surat Notulen Tidak Berlaku', $tidakBerlakuNotulenCount)
                ->description('Jumlah surat Notulen yang tidak berlaku')
                ->descriptionIcon('heroicon-m-x-circle'),
        ];
    }
}
