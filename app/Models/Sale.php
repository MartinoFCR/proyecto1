<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_sale';
    public function usersColumn (){
        return $this->belongsTo(users::class, 'user_id_sale','user_id');
    }
    public function employeeColumn (){
        return $this->belongsTo(employee::class, 'employee','employees_id');
    }
    public function customerColumn (){
        return $this->belongsTo(customers::class, 'customer','id');
    }
}
