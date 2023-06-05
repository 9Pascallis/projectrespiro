<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemProduk extends Model
{
    protected $table='item_produk';
    protected $guarded=['id'];


    public function warna()
   {
       return $this->belongsTo(Warna::class, 'id_warna');
   }

  public function ukuran()
  {
      return $this->belongsTo(Ukuran::class,'id_ukuran');
  }

  public function permintaan()
  {
      return $this->belongsTo(permintaan::class,'id');
  }
}
