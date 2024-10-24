<?php

namespace App\Filament\Clusters\DigitalArsip\Resources\SuratNotulenResource\Pages;

use App\Filament\Clusters\DigitalArsip\Resources\SuratNotulenResource;
use App\Filament\Clusters\DigitalArsip\Resources\SurNoteResource\Widgets\NoteOverview;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSuratNotulens extends ListRecords
{
    protected static string $resource = SuratNotulenResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    
    protected function getHeaderWidgets(): array
    {
        return [

            NoteOverview::class,
        ];
    }
}
