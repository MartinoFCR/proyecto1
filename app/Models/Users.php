<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;
    protected $table = "users";
    public function users_profiles (){
        return $this->belongsTo(users_profiles::class, 'profile_id','profile_id');
    }
}