<?php

namespace App\Models;

use App\Models\Permintaan;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KonfirmasiPermintaan extends Model
{
    protected $table='konfirmasi_permintaan';
    protected $guarded=['id'];

    public function permintaan()
   {
       return $this->belongsTo(Permintaan::class, 'id_permintaan');
   }
   public function scopeConfirmed($query)
   {
       return $query->where('status', 'accept');
   }
     public function ProductionPlan()
    {
        return $this->hasMany(ProductionPlan::class, 'id');
    }
}
