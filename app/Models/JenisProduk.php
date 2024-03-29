<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisProduk extends Model
{
    protected $table='jenis_produk';
    protected $guarded=['id'];


    public function permintaan()
    {
        return $this->hasMany(permintaan::class, 'id');
    }
}
