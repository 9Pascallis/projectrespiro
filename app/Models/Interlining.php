<?php

namespace App\Models;
use App\Models\Worksheet;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interlining extends Model
{
    protected $table='interlining';
    protected $guarded=['id'];
    
    public function Worksheet()
    {
        return $this->belongsTo(Worksheet::class, 'id');
    }
}
