<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubKategori extends Model
{
    protected $table='sub_kategori';
    protected $guarded=['id'];

    
    public function permintaan()
    {
        return $this->hasMany(permintaan::class, 'id');
    }
}
