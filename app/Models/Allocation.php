<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Allocation extends Model
{
    protected $table='allocation';
    protected $guarded=['id'];

    public function ProductionPlan()
    {
        return $this-hasMany(ProductionPlan::class, 'id');
    }

}
