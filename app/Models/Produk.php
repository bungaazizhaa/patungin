<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    // protected $table = ''
    protected $fillable = [
        'idProduk',
        'namaProduk',
        'hargaProduk',
        'produkTerjual',
        'stock'
    ];
}
