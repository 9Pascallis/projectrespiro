<?php

namespace App\Models;

use App\Models\JenisProduk;
use App\Models\Kategori;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class permintaan extends Model
{
    protected $table='permintaan';
    protected $guarded=['id'];

  
   public function jenis_produk()
   {
       return $this->belongsTo(JenisProduk::class, 'id_jenis_produk');
   }

  public function kategori()
  {
      return $this->belongsTo(Kategori::class,'id_kategori');
  }
  public function sub_kategori()
  {
      return $this->belongsTo(SubKategori::class,'id_sub_kategori');
  }

    public function Worksheet()
    {
        return $this->hasMany(Worksheet::class, 'id');
    }

    public function KonfirmasiPermintaan()
    {
        return $this->hasMany(KonfirmasiPermintaan::class, 'id');
    }

    public function ItemProduk()
    {
        return $this->hasMany(ItemProduk::class, 'id');
    }

   
}
