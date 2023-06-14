<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProcessSewing extends Model
{
    protected $table='process_sewing';
    protected $guarded=['id'];

    public function sewing()
    {
        return $this->hasMany(Cutting::class, 'id_process_sewing', 'id');
    }
}
