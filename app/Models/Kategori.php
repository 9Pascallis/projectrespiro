<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table='kategori';
    protected $guarded=['id'];

    public function permintaan()
    {
        return $this->hasMany(Permintaan::class, 'id');
    }
}
