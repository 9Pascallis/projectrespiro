<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProcessCutting extends Model
{
    protected $table='process_cutting';
    protected $guarded=['id'];

    public function cutting()
    {
        return $this->hasMany(Cutting::class, 'id_process_cutting', 'id');
    }
}