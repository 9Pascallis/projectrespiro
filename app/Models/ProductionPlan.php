<?php

namespace App\Models;

use App\Models\Permintaan;
use App\Models\Allocation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductionPlan extends Model
{
    protected $table='production_plan';
    protected $guarded=['id'];

  
   public function permintaan()
   {
       return $this->belongsTo(Permintaan::class, 'id_permintaan');
   }
   public function allocation()
   {
       return $this->belongsTo(allocation::class, 'id_allocation');
   }
   public function Worksheet()
    {
        return $this-hasMany(Worksheet::class, 'id');
    }

}

