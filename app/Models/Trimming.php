<?php

namespace App\Models;
use App\Models\Permintaan;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trimming extends Model
{
    protected $table='trimming';
    protected $guarded=['id'];
    
    public function permintaan()
   {
       return $this->belongsTo(Permintaan::class, 'id_permintaan');
   }
}
