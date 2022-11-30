<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penitipan extends Model
{
    use HasFactory;
    protected $table = 'groomings';
    
    protected $fillable = [
        'namahewan',
        'jenishewan',
        'alamat',
        'sediapetcargo',
        'sediakandang',
        'tanggalpenginapan',
        'jenispaket',
        'berapakalimakan',
        'pakan',
        'riwayatvaksin',
        'kontak',
        'riwayatpenyakit'
    ];
}
