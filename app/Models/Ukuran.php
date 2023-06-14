<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ukuran extends Model
{
    protected $table='ukuran';
    protected $guarded=['id'];

    public function item_produk()
    {
        return $this->hasMany(ItemProduk::class, 'id');
    }
    public function Cutting()
    {
        return $this->hasMany(Cutting::class, 'id');
    }
    public function Sewing()
    {
        return $this->hasMany(Sewing::class, 'id');
    }
}
