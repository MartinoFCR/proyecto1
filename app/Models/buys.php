<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buys extends Model
{
    use HasFactory;
    protected $fillable = [
        'supplier_id',
        'user_id',
        'purchase_date',
        'tax',
        'total',
        'status'
    ];
    public function supplier()
    {
        return $this->belongsTo(suppliers::class);
    }
    public function user()
    {
        return $this->belongsTo(Users::class);
    }
    public function buys_orders()
    {
        return $this->hasMany(buys_orders::class);
    }
}
