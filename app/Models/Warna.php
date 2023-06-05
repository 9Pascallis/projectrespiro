<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warna extends Model
{
    protected $table='warna';
    protected $guarded=['id'];

    public function item_produk()
    {
        return $this->hasMany(ItemProduk::class, 'id');
    }
}
