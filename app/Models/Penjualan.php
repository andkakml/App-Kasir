<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function Pelanggan()
    {
        return $this->belongsTo(Pelanggan::class, 'id_pelanggan','id');
    }
    public function User()
    {
        return $this->belongsTo(User::class, 'id_user','id');
    }

    public function DetailPenjualan()
    {
        return $this->hasMany(DetailPenjualan::class, 'id_penjualan', 'id');
    }

}
