<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPenjualan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function Penjualan()
    {
        return $this->belongsTo(Penjualan::class, 'id_penjualan', 'id');
    }

    public function Produk()
    {
        return $this->belongsTo(Produk::class, 'id_produk', 'id');
    }
    public function Pelanggan()
    {
        return $this->belongsTo(Pelanggan::class, 'id_pelanggan', 'id');
    }
}
