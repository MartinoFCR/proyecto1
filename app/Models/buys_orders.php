<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buys_orders extends Model
{
    use HasFactory;
    protected $fillable = [
        'buy_id',
        'products_id',
        'quantity',
        'price'
    ];
    public function buys()
    {
        return $this->belongsTo(buys::class);
    }
    public function products()
    {
        return $this->belongsTo(products::class);
    }
    
}
