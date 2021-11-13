<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    // protected $table = ''
    protected $fillable = [
        'idTransaksi',
        'idProduk',
        'pendapatanHarian',
        'pengeluaranHarian',
        'keuntungan'
    ];
}
