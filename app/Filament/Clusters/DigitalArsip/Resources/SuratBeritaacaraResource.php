<?php

namespace App\Filament\Clusters\DigitalArsip\Resources;

use App\Filament\Clusters\DigitalArsip;
use App\Filament\Clusters\DigitalArsip\Resources\SuratBeritaacaraResource\Pages;
use App\Filament\Clusters\DigitalArsip\Resources\SuratBeritaacaraResource\RelationManagers;
use App\Models\SuratBeritaacara;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Storage;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Contracts\HasTable;
use stdClass;

class SuratBeritaacaraResource extends Resource
{
    protected static ?string $model = SuratBeritaacara::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $cluster = DigitalArsip::class;

    protected static ?string $navigationLabel = 'Surat Berita Acara';

    protected static ?string $pluralModelLabel = 'Surat Berita Acara';

    protected static ?string $modelLabel = 'Surat Berita Acara';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nomor_surat')->required(),
                Forms\Components\TextInput::make('judul')->required(),
                Forms\Components\Select::make('pembuat_dokumen')
                    ->required()
                    ->options([
                        'Kementrian BUMN' => 'Kementrian BUMN',
                        'kementrian' => 'Kementrian',
                        'dirjenbun' => 'Dirjenbun',
                        'holding_ptpn_3' => 'Holding PTPN 3 Persero',
                        'ptpn_4_head_office' => 'PTPN 4 Head Office',
                        'ptpn_4_regional_5' => 'PTPN 4 Regional 5',
                        'bagian_sekretariat_hukum' => 'Bagian Sekretariat dan Hukum',
                        'bagian_tanaman' => 'Bagian Tanaman',
                        'bagian_teknik_pengolahan' => 'Bagian Teknik dan Pengolahan',
                        'bagian_sdm' => 'Bagian SDM',
                        'bagian_pengadaan_ti' => 'Bagian Pengadaan dan TI',
                        'bagian_distrik_petani_mitra' => 'Bagian Distrik Petani Mitra',
                        'bagian_akuntansi_keuangan' => 'Bagian Akuntansi dan Keuangan',
                        'bagian_spi_pengawas_wilayah' => 'Bagian SPI/Pengawas Wilayah',
                        'bagian_pmo' => 'Bagian PMO',
                        'lainnya' => 'Lainnya',
                    ])
                    ->label('Pembuat Dokumen'),
                Forms\Components\DatePicker::make('tanggal_surat')->required(),
                Forms\Components\TextInput::make('ringkasan')->required(),
                Forms\Components\Select::make('status')
                    ->required()
                    ->options([
                        'masih_berlaku' => 'Masih Berlaku',
                        'tidak_berlaku' => 'Tidak Berlaku',
                    ])
                    ->label('Status'),
                Forms\Components\FileUpload::make('file')
                    ->required()
                    ->label('Upload File')
                    ->acceptedFileTypes([
                        'image/*', // Semua jenis gambar
                        'application/pdf', // PDF
                        'application/msword', // Word
                        'application/vnd.openxmlformats-officedocument.wordprocessingml.document', // Word (Docx)
                        'application/vnd.ms-excel', // Excel
                        'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', // Excel (Xlsx)
                        'text/plain', // File teks
                    ])
                    ->maxSize(51200), // Maksimal 50MB
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                TextColumn::make('No')->state(
                    static function (HasTable $livewire, stdClass $rowLoop): string {
                        return (string) (
                            $rowLoop->iteration +
                            ($livewire->getTableRecordsPerPage() * (
                                $livewire->getTablePage() - 1
                            ))
                        );
                    }
                ),

                Tables\Columns\TextColumn::make('nomor_surat')->label('Nomor Surat')->searchable(),
                Tables\Columns\TextColumn::make('judul')
                    ->label('Judul')
                    ->searchable()
                    ->html() // Mengaktifkan HTML untuk kolom ini
                    ->formatStateUsing(function ($state) {
                        $words = explode(' ', $state);
                        $lines = array_chunk($words, 5); // Pisahkan menjadi kelompok-kelompok 5 kata
                        $formattedText = array_map(function ($line) {
                            return implode(' ', $line);
                        }, $lines); // Gabungkan kata dalam satu grup menjadi satu string
                        return implode('<br>', $formattedText); // Gabungkan grup kata dengan <br> untuk turun ke baris berikutnya
                    }),
                Tables\Columns\TextColumn::make('pembuat_dokumen')->label('Pembuat Dokumen')->searchable(),
                Tables\Columns\TextColumn::make('tanggal_surat')->label('Tanggal Surat'),
                Tables\Columns\TextColumn::make('status')->label('Status')->searchable(),
                Tables\Columns\TextColumn::make('file')
                    ->label('File')
                    ->formatStateUsing(function ($state) {
                        if ($state) {
                            $fileName = basename($state); // Mendapatkan nama file dari path
                            $fileUrl = Storage::url($state); // Mendapatkan URL file
                            $fileExtension = pathinfo($fileName, PATHINFO_EXTENSION); // Mendapatkan ekstensi file

                            if (strtolower($fileExtension) === 'pdf') {
                                // Jika file adalah PDF, buka di tab baru tanpa atribut download
                                return '<a href="' . $fileUrl . '" target="_blank" class="text-blue-500 underline">Buka PDF</a>';
                            } else {
                                // Jika file bukan PDF, langsung download
                                return '<a href="' . $fileUrl . '" download="' . $fileName . '" class="text-blue-500 underline">Download</a>';
                            }
                        }
                        return 'No file';
                    })->html(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ]);
    }
    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSuratBeritaacaras::route('/'),
            'create' => Pages\CreateSuratBeritaacara::route('/create'),
            'edit' => Pages\EditSuratBeritaacara::route('/{record}/edit'),
        ];
    }
}
