<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Riwayat extends Model
{
    use HasFactory;
    protected $table = "riwayat";
    protected $fillable = [
        'user_id',
        'wisata_id',
        'unique_code',
        'kuantitas',
        'tanggal',
        'waktu',
    ];
}
