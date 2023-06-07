<?php

namespace App\Models;

use App\Models\Permintaan;
use App\Models\ProductionPlan;
use App\Models\Worksheet;
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
   public function ShellFabric()
   {
       return $this->hasMany(ShellFabric::class, 'id');
   }

   public function Linning()
   {
       return $this->hasMany(Linning::class, 'id');
   }

   public function Interlining()
   {
       return $this->hasMany(Interlining::class, 'id');
   }

   public function Trimming()
   {
       return $this->hasMany(Trimming::class, 'id');
   }

   public function Schedule()
   {
       return $this->hasMany(Schedule::class, 'id');
   }
}
