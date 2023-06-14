<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sewing extends Model
{
    protected $table='sewing';
    protected $guarded=['id'];


    public function warna()
    {
        return $this->belongsTo(Warna::class, 'id_warna');
    }
 
   public function ukuran()
   {
       return $this->belongsTo(Ukuran::class,'id_ukuran');
   }
 
   public function worksheet()
   {
       return $this->belongsTo(Worksheet::class,'id_worksheet');
   }
   public function process_sewing()
   {
        return $this->belongsTo(ProcessCutting::class, 'id_process_sewing', 'id');
   }
}
