<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable 
{
    use HasFactory, Notifiable;

    protected $table='user';
    protected $guarded=['id'];

  

    public function role()
   {
        return $this->belongsTo(Role::class, 'id_role', 'id');
   }
}
