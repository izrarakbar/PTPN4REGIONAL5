<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratMemoRandom extends Model
{
    use HasFactory;
    protected $fillable = [
        'nomor_surat',
        'judul',
        'pembuat_dokumen',
        'tanggal_surat',
        'ringkasan',
        'status',
        'file',
    ];
}

