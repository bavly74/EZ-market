<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function category()
    {
       return $this->belongsTo(Category::class);
    }
    public function inventory()
    {
        return $this->hasOne(Inventory::class);
    }
    public function brand()
    {
        return $this->belongsTo(brand::class);
    }
    public function orders()
    {
        return $this->belongsToMany(Product::class,'orders_products_pivot');
    }
protected $casts=[
    'variations'=>'object'
];
}
