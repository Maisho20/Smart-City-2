<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataDokumen extends Model
{
    use HasFactory;

    protected $table = 'data_dokumens';

    protected $fillable = [
        'judul',
        'file',
        'keterangan',
        'kategori',
        'tahun',
        'upload_at',
    ];
}