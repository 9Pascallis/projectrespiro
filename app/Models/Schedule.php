<?php

namespace App\Models;
use App\Models\Worksheet;
use App\Models\Schedule;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $table='schedule';
    protected $guarded=['id'];

    public function Worksheet()
    {
        return $this->belongsTo(Worksheet::class, 'id_worksheet');
    }
    
}
