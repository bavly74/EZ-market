<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function invoice()
    {
        return $this->hasOne(Invoice::class);
    }
    public function delivery()
    {
        return $this->belongsTo(Delivery_man::class);
    }
    public function products()
    {
        return $this->belongsToMany(Product::class,'orders_products_pivot');
    }
    protected $casts=[
        'order_details'=>'object'
    ];
}
