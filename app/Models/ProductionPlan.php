<?php

namespace App\Models;

use App\Models\KonfirmasiPermintaan;
use App\Models\Allocation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductionPlan extends Model
{
    protected $table='production_plan';
    protected $guarded=['id'];

  
   public function konfirmasi_permintaan()
   {
       return $this->belongsTo(KonfirmasiPermintaan::class, 'id_konfirmasi_permintaan');
   }
   public function allocation()
   {
       return $this->belongsTo(allocation::class, 'id_allocation');
   }
   public function Worksheet()
    {
        return $this-hasMany(Worksheet::class, 'id_worksheet');
    }

}

