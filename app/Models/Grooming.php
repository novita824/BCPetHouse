<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grooming extends Model
{
    use HasFactory;
    protected $table = 'groomings';
    
    protected $fillable = [
        'nama',
        'namahewan',
        'jenishewan',
        'umur',
        'alamat',
        'notelp',
        'tipegrooming',
        'sediapetcargo'
    ];
}
