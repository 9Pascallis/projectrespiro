<?php

namespace App\Models;

use App\Models\Permintaan;
use App\Models\ProductionPlan;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worksheet extends Model
{
    protected $table='worksheet';
    protected $guarded=['id'];

  
   public function permintaan()
   {
       return $this->belongsTo(Permintaan::class, 'id_permintaan');
   }
   public function productionPlan()
   {
       return $this->belongsTo(ProductionPlan::class, 'id_production_plan');
   }
}
